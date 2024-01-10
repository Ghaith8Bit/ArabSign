<?php

namespace App\View\Components\website\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionBreak extends Component
{

    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.home.section-break');
    }
}
