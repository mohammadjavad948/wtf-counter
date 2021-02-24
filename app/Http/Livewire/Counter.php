<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wtf;

class Counter extends Component
{
    public Wtf $counter;

    public function increase(){
        $this->counter->increment('count');
    }

    public function delete(){
        $this->emit('delete-counter', $this->counter->id);
    }

    public function render()
    {
        return view('livewire.counter')
            ->extends('master');
    }
}
