<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $message = '',
        public string $etc = '',
        public string $userId=''
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    /**
     * Whether the component should be rendered
     * 아래조건 충족시만 render함
     */
    public function shouldRender(): bool
    {
        return Str::length($this->message) > 0;
    }
}
