<?php

namespace App\Http\Controllers;
use App\Models\NoteModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index() {
        $notes = NoteModel::query()->orderBy('updated_at', 'desc')->get();
        return view('notes.notes', ['notes' => $notes]);
    }

    public function create() {
        return view('notes.create');
    }

    public function edit(NoteModel $note) {
        return view('notes.edit', ['note' => $note]);
    }

    public function delete(NoteModel $note) {
        return view('notes.delete', ['note' => $note]);
    }

    public function store(Request $request) {
        $rules = ['message' => ['required', 'string']];
        $data = $request->validate($rules);
        
        $data["contents"] = $data["message"];
        NoteModel::create($data);
        return to_route('notes.notes')->with('create-success', 'Note has been created successfully!');
    }

    public function update(Request $req, NoteModel $note) {
        $rules = ['note' => ['required', 'string']];
        $data = $req->validate($rules);

        $data["contents"] = $data["note"];
        $note->update($data);
        return to_route('notes.notes')->with('create-success', 'Note has been edited successfully!');
    }

    public function destroy(NoteModel $note) {
        $note->delete();
        return to_route('notes.notes');
    }
}
