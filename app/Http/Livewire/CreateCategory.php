<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public Category $categories;

    protected $rules = [
        'category.name' => 'required|string',
    ];

    public function mount()
    {
        $this->categories = new Category();
    }

    public function save()
    {
        $this->validate();

        $this->categories->save();

        return redirect()->to('/categories');
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}
