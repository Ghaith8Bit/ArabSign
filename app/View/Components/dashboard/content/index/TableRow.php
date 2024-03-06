<?php

namespace App\View\Components\dashboard\content\index;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableRow extends Component
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
        return view('components.dashboard.content.index.table-row');
    }
}
