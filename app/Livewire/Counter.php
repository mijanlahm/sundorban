<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $quantity = 1;

    public function increment1()
    {
        $this->quantity++;
    }

    public function decrement1()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
