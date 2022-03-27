<?php

namespace App\View\Components;

use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title, $script, $btm;
    public function __construct($title = null, $script = null, $btm = null)
    {
        $this->title = $title ?? '';
        $this->script = $script ?? '';
        $this->btm = $btm ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app');
    }
}
