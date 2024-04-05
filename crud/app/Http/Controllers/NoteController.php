<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    //

    public function index(): View {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View{
        return view('note.create');
    }

    public function store(NoteRequest $request): RedirectResponse{
        // $note = new Note;
        // $note->title = $request->title; 
        // $note->description = $request->description; 
        // $note->save();

        // Esta es una forma más simplificada
        Note::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Esta es una más simplificada ya que se respeta 
        // los name en el form y sabe donde se guardará cada uno
        // Note::create($request->all()); 

        return redirect()->route('note.index');
    }

    public function edit(Note $note): View{
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse{
        $note->update($request->all());
        return redirect()->route('note.index');
    }

    public function show(Note $note):  View{
        return view('note.show', compact('note'));
    }

    public function destroy(Note $note): RedirectResponse{
        $note->delete();
        return redirect()->route('note.index');
    }
}
