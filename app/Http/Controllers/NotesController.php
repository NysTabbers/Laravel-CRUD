<?php
namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::latest('id')->take(50)->get();
        return view('home', ['notes' => $notes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'notesContent' => 'required|max:1000',
        ]);

        Note::create($request->only('title', 'notesContent'));

        return redirect('/')->with('success', 'Note created!');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|max:255',
            'notesContent' => 'required|max:1000',
        ]);

        $note->update($request->only('title', 'notesContent'));

        return redirect('/')->with('success', 'Note updated!');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/')->with('success', 'Note deleted!');
    }
}