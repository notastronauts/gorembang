<?php

namespace App\Http\Livewire\Batik;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortField = "title";
    public $sortAsc = true;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.batik.datatable', [
            'batiks' => DB::table('batiks')->orWhere('title', 'LIKE', "%$this->search%")
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
