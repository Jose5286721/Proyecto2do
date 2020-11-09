<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppAlert extends Component
{
    public $type,$label,$message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$label,$message)
    {
        $this->type = $type;
        $this->label = $label;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-alert');
    }
}
