<?php

namespace App\Http\Livewire\Pendopo;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pendopo.index')
            ->layout('layouts.master');
    }
}
