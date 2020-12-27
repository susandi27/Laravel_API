<?php

namespace App\View\Components;
use App\Brand;

use Illuminate\View\Component;

class BrandComponent extends Component
{
    public $brands;    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->brands=Brand::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.brand-component');
    }
}
