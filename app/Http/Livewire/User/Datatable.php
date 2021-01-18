<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
  use WithPagination;

  public $perPage = 10;
  public $sortField = "name";
  public $sortAsc = true;
  public $search = '';

  public function sortBy($field)
  {
    if ($this->sortField === $field) {
      $this->sortAsc = ! $this->sortAsc;
    } else {
      $this->sortAsc = true;
    }

    $this->sortField = $field;
  }

  public function render()
  {
    return view('livewire.user.datatable', [
      'users' => DB::table('users')->orWhere('name', 'LIKE', "%$this->search%")
      ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
      // ->paginate($this->perPage)
      ->get(),
    ]);
  }
}
