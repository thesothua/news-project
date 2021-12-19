<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Forms extends Component
{

    public $type;
    public $label;
    public $name;
    // public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type , $label, $name, $message = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        // $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms');
    }
}
