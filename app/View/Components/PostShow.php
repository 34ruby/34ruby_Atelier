<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostShow extends Component
{
    public $picture;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.picture-show');
    }
}
