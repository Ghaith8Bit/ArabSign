<?php

namespace App\View\Components\dashboard\content\edit\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Keyword extends Component
{

    public $keywords;

    /**
     * Create a new component instance.
     */
    public function __construct($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.dashboard.content.edit.input.keyword');
    }
}
