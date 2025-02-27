<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Operations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();

        return view('main/index', ['notes' => $notes]);
    }

    public function create()
    {

        return view('main/create');
    }

    public function createSubmit(Request $request)
    {
        $id = session('user.id');
        $note = $request->input('note');

        User::find($id)->notes()->create(['note' => $note]);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $id = Operations::decryptId($id);

        return view('main/edit');
    }

    public function delete($id)
    {
        $id = Operations::decryptId($id);

        return redirect()->route('home');
    }
}
