<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.layouts.home')
        ->layout('layouts.home');
    }
}
