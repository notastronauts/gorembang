<?php

namespace App\Http\Livewire\KantorBupati;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.kantor-bupati.index')
        ->layout('layouts.master');
    }
}
