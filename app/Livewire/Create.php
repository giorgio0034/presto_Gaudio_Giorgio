<?php

namespace App\Livewire;

use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

#[Validate('required|min:5')]
public $title;
#[Validate('required|min:10')]
public $description;
#[Validate('required|numeric')]
public $price;
#[Validate('required')]
public $category;


public function store(){


   $this->validate([
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'category' => 'required',
    ]);



        Ad::create([
        'title'=>$this->title,
        'description'=>$this->description,
        'price'=>$this->price,
        'category'=>$this->category,

    ]);

            session()->flash('message', 'Annuncio creato con successo');
             $this->reset();

}





public function render()
    {
        return view('livewire.create');
    }
}
