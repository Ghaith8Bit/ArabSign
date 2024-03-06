<?php

namespace App\View\Components\dashboard\content\edit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{

    public $categories;
    public $content;
    public $keywords;

    /**
     * Create a new component instance.
     */
    public function __construct($categories, $content, $keywords)
    {
        $this->categories = $categories;
        $this->content = $content;
        $this->keywords = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.dashboard.content.edit.form');
    }
}
