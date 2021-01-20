<?php

namespace App\Http\Livewire\Batik;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.batik.index')
        ->layout('layouts.master');
    }
}
