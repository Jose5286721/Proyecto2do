<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppCardStatistic extends Component
{
    public $color,$cantidad,$descripcion,$icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = "green",$cantidad,$descripcion,$icon)
    {
        $this->color = $color;
        $this->cantidad = $cantidad;
        $this->descripcion = $descripcion;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-card-statistic');
    }
}
