<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class comment extends Component
{

    public $commentData;
    /**
     * Create a new component instance.
     */
    public function __construct($commentData)
    {
        $this->commentData = $commentData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment', ['commentData' => $this->commentData]);
    }
}
