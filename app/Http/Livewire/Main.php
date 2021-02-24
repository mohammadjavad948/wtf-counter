<?php

namespace App\Http\Livewire;

use App\Models\Wtf;
use Livewire\Component;

class Main extends Component
{
    public $count;

    public function mount(){
        $this->count = new Wtf();
    }

    public $rules = [
      'count.name' => 'required'
    ];


    protected $listeners = [
        'delete-counter' => 'DC'
    ];

    public function save(){
        $this->validate();

        $this->count->count = 0;

        $this->count->save();

        $this->count = new Wtf();
    }

    public function DC($id){

        Wtf::find($id)->delete();

    }

    public function render()
    {
        $counters = Wtf::all();

        return view('livewire.main', compact('counters'))
            ->extends('master');
    }
}
