<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:20'
        ],[
            'text_username.required' => 'Email is required',
            'text_username.email' => 'Email is not valid',
            'text_password.required' => 'Password is required',
            'text_password.min' => 'Password minimal :min character',
            'text_password.max' => 'Password maximal :max characters'
        ]);

        echo 'ok';
    }

    public function login()
    {
        return view('main/login');
    }

    public function logout()
    {
        echo 'logout';
    }
}
