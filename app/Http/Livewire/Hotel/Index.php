<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.hotel.index')
        ->layout('layouts.master');
    }
}
