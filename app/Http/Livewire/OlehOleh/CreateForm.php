<?php

namespace App\Http\Livewire\OlehOleh;

use App\Models\OlehOleh;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.oleh-oleh.create-form');
    }

    public function store()
    {
        $validatedData = $this->validate();

        $name = md5($this->image . microtime()) . '.' . $this->image->extension();
        $this->image->storeAs('public/images', $name);

        OlehOleh::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => asset('storage/images/' . $name)
        ]);

        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil tambah data.');

        return redirect(route('models.oleh-oleh'));
    }
}
