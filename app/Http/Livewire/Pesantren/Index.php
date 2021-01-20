<?php

namespace App\Http\Livewire\Pesantren;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pesantren.index')
        ->layout('layouts.master');
    }
}
