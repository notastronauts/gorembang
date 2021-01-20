<?php

namespace App\Http\Livewire\Travel;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.travel.index')
        ->layout('layouts.master');
    }
}
