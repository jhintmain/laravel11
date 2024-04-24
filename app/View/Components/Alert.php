<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Alert extends Component
{

    public string $type;
    public ?string $message;
    public ?string $etc;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $message = null,$etc = null)
    {
        $this->type = $type;
        $this->message = $message;
        $this->etc = $etc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
