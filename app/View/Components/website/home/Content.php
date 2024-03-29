<?php

namespace App\View\Components\website\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content extends Component
{

    public $contents;

    /**
     * Create a new component instance.
     */
    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.website.home.content');
    }
}
