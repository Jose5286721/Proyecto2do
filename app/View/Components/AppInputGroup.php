<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppInputGroup extends Component
{
    public $type,$label,$name,$placeholder,$value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$type = "text",$name,$placeholder,$value="")
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-input-group');
    }
}
