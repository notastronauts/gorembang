<?php

namespace App\Http\Livewire\Pantai;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pantai.index')
        ->layout('layouts.master');
    }
}
