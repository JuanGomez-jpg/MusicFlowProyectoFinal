<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlbumFrame extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($al, $user)
    {
        $this->al = $al;
        $this->us = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.album-frame',[
            'al' => $this->al,
            'us' => $this->us,
        ]);
    }
}
