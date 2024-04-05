<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class Counter extends Component
{
    public $note = "";
    public $feedback = "";

    public function store(){
        Note::create([
            "content" => $this->note
        ]);
        $this->feedback = "Note created";
    }

    public function update($id){
        $noteToUpdated = Note::find($id);
        $noteToUpdated->content = $this->note;
        $noteToUpdated->save();
        $this->feedback = "Note Updated";
    }

    public function destroy($id){
        Note::destroy($id);
        $this->feedback = "Note deleted";
    }

    // public $count = 0;
    // public $username = "";

    // public function mount(){
    //     $this->count = 25;
    // }

    // public function increment(){
    //     $this->count += 2;
    //     // $this->count++;
    // }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.counter', compact('notes'));
    }

}
