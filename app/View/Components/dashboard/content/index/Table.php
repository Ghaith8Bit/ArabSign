<?php

namespace App\View\Components\dashboard\content\index;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
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
        return view('components.dashboard.content.index.table');
    }
}
