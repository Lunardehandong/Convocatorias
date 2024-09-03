<?php

namespace App\View\Components\Carousel;

use Illuminate\View\Component;

class Carousel extends Component
{
    public $id;
    public $class;
    public $indicators;
    public $control;

    public function __construct($id, $class = '', $indicators = true, $control = true)
    {
        $this->id = $id;
        $this->class = $class;
        $this->indicators = $indicators;
        $this->control = $control;
    }

    public function render()
    {
        return view('components.carousel.carousel');
    }
}
