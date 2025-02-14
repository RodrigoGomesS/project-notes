<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:20'
        ], [
            'text_username.required' => 'Email is required',
            'text_username.email' => 'Email is not valid',
            'text_password.required' => 'Password is required',
            'text_password.min' => 'Password minimal :min character',
            'text_password.max' => 'Password maximal :max characters'
        ]);

        $username = $request->input('text_username');
        $password = $request->input('text_password');

        $user = User::where('username', $username)
            ->where('deleted_at', NULL)
            ->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Username or password is wrong');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Username or password is wrong');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' =>[
                'id' => $user->id,
                'username' => $user->username,
            ]
        ]);
    }

    public function login()
    {
        return view('main/login');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->to('login');
    }
}
