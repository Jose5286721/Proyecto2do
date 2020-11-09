<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppButton extends Component
{
    public $color,$text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color,$text = "submit")
    {
        $this->color = $color;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-button');
    }
}
