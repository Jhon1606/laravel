<?php

namespace App\Livewire;

use Livewire\Component;

class Note extends Component
{
    public $note = "";
    public $feedback = "";

    public function store(){
        Note::create([
            "content" => $this->note
        ]);
        $this->feedback = "Note created";
    }

    public function render()
    {
        return view('livewire.note');
    }
}
