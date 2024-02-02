<?php

namespace App\View\Components\dashboard\library;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    public $query;

    /**
     * Create a new component instance.
     */
    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.dashboard.library.search');
    }
}
