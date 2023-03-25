<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowCategories extends Component
{
    public function render()
    {
        return view('livewire.show-categories', [
            'categories' => Category::all(),
        ]);
    }
}
