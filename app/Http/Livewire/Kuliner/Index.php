<?php

namespace App\Http\Livewire\Kuliner;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.kuliner.index')
        ->layout('layouts.master');
    }
}
