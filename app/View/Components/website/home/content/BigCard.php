<?php

namespace App\View\Components\website\home\content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BigCard extends Component
{

    public $content;

    /**
     * Create a new component instance.
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.website.home.content.big-card');
    }
}
