<?php

namespace App\Views\Components;

use App\Models\Author;
use Illuminate\View\Component;
use App\Models\Category;

//
//class Select extends Component
//{
//    public $name;
//    public $label;
//    public $options;
//
//    /**
//     * Create a new component instance.
//     *
//     * @return void
//     */
//    public function __construct($name, $label)
//    {
//        $this->name = $name;
//        $this->label = $label;
////        $this->options;
//
//        if ($name == 'category'){
//            $this->options = Category::all();
//
//        }
////        elseif ($name == 'author') {
////            $this->options = Author::all();
////        }
//    }
//
//    /**
//     * Get the view / contents that represent the component.
//
//     * @return \Illuminate\Contracts\View\View|string
//     */
//    public function render()
//    {
//
//        return view('components.select');
//    }
//}
