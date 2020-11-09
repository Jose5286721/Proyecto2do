<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class AppSectionBreadcrumb extends Component
{
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->route = Str::of(Str::of(trim(str_replace("/"," ,",str_replace(url('/'),"",url()->current()))))->trim('/'))->explode(',');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-section-breadcrumb');
    }
}
