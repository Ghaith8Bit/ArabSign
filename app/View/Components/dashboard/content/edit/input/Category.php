<?php

namespace App\View\Components\dashboard\content\edit\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{

    public $categories;
    public $selected;

    /**
     * Create a new component instance.
     */
    public function __construct($categories, $selected)
    {
        $this->categories = $categories;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.dashboard.content.edit.input.category');
    }
}
