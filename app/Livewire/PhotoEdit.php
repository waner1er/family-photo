<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Photo;

class PhotoEdit extends Component
{
    public Photo $photo;
    public function render()
    {
        return view('livewire.photo-edit');
    }
}
