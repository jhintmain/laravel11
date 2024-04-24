<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function boot(): void
    {
        Blade::component('package-alert', Alert::class);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
