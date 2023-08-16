<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class PhotoComponent extends Component
{


    public function render()
    {
        return view('livewire.photo-component', ['photos' =>  Photo::all()]);
    }
}
