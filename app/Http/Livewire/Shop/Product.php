<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;


class Product extends Component
{
    public function render()
    {
        return view('livewire.shop.product')
        ->layout('layouts.center');

    }
}
