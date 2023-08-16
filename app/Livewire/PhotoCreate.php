<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;
use Livewire\WithFileUploads;

class PhotoCreate extends Component
{
    use WithFileUploads;


    public $title = '';
    public $description = '';
    public $src = '';
    public $isPublic = '';
    public $category_id = '';


    protected $rules = [
        'title' => 'required|min:6',
        'src' => 'required|email',
        'description' => 'required',
        'isPublic' => 'boolean',
        'category_id' => 'required'
    ];
    public function save()
    {
        
       Photo::create([
            'title' => $this->title,
            'src' => $this->src,
            'description' =>$this->description,
            'isPublic' => $this->isPublic,
            'category_id' => $this->category_id
        ]);
 
        return redirect()->route('categories.index')
            ->with('status', 'photo successfully created.');
    }
    public function render()
    {
        return view('livewire.photo-create');
    }
}
