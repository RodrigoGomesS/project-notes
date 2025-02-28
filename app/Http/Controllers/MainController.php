<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Note;
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

        return view('main/create_note');
    }

    public function createSubmit(Request $request)
    {
        $request->validate([
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:3|max:3000'
        ], [
            'text_title.required' => 'Title is required',
            'text_note.required' => 'Note is required',
            'text_title.min' => 'Title minimal :min character',
            'text_title.max' => 'Title maximal :max characters',
            'text_note.min' => 'Note minimal :min character',
            'text_note.max' => 'Note maximal :max characters'
        ]);

        $id = session('user.id');
        $note = new Note();
        $note->user_id = $id;
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $id = Operations::decryptId($id);
        $note = Note::find($id);

        return view('main/edit_note', ['note' => $note]);
    }

    public function editSubmit(Request $request)
    {
        $request->validate([
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:3|max:3000'
        ], [
            'text_title.required' => 'Title is required',
            'text_note.required' => 'Note is required',
            'text_title.min' => 'Title minimal :min character',
            'text_title.max' => 'Title maximal :max characters',
            'text_note.min' => 'Note minimal :min character',
            'text_note.max' => 'Note maximal :max characters'
        ]);

        if ($request->note_id == null) {
            return redirect()->route('home');
        }
        
        $id = Operations::decryptId($request->note_id);
        $note = Note::find($id);
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $id = Operations::decryptId($id);

        return redirect()->route('home');
    }
}
