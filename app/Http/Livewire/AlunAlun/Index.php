<?php

namespace App\Http\Livewire\AlunAlun;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.alun-alun.index')
            ->layout('layouts.master');
    }
}
