<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryEdit extends Component
{
    public Category $category;

    public function render()
    {
        return view('livewire.category-edit');
    }
}
