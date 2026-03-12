<?php

use Livewire\Component;

new class extends Component
{
    public $isOpen = false;

    public function toggleBurger()
    {
        $this->isOpen = $this->isOpen == true ? false : true;
    }
};
