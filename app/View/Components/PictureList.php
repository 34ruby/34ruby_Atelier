<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PictureList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pictures;

    public function __construct($pictures)
    {
        $this->pictures = $pictures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.picture-list');
    }
}
