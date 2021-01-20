<?php

namespace App\Http\Livewire\KantorBupati;

use App\Models\KantorBupati;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateForm extends Component
{

    use WithFileUploads;

    public $title;
    public $address;
    public $image;

    protected $rules = [
        'title' => 'required',
        'address' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.kantor-bupati.create-form');
    }

    public function store()
    {
        $validatedData = $this->validate();

        $name = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('public/images', $name);

        KantorBupati::create([
            'title' => $validatedData['title'],
            'address' => $validatedData['address'],
            'image' => asset('storage/images/'.$name)
        ]);

        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil tambah data.');

        return redirect(route('models.kantor-bupati'));
    }
}
