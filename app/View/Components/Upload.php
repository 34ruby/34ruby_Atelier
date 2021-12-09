<?php

namespace App\View\Components\Picture;

use Illuminate\View\Component;

class Upload extends Component
{
    public $pictures;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pictures)
    {
        $this->picture = $pictures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('upload');
    }
}
