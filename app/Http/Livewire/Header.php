<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $darkMode;

    public function render()
    {
        return view('livewire.header');
    }
}
