<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $cat;
    public function edit()
    {
        return redirect()->route('categories.edit', ['category', $this->cat]);
    }

    public function render()
    {
        return view('livewire.category-component', [
            'categories' => Category::all()
        ]);
    }
}
