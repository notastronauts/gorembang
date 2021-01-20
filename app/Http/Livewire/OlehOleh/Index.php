<?php

namespace App\Http\Livewire\OlehOleh;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.oleh-oleh.index')
        ->layout('layouts.master');
    }
}
