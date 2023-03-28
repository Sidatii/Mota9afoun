<?php

namespace App\View\Components;

use App\Models\Author;
use App\Models\Category;
use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $options;
    public $idc;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $idc = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->idc = $idc;

        if ($name == 'category'){
            $this->options = Category::all();

        }elseif ($name == 'author') {
            $this->options = Author::all();
        }elseif ($name == 'category_id') {
            $this->options = Category::all();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
//        dd($this->options);
        return view('components.select');
    }
}
