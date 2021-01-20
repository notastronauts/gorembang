<?php

namespace App\Http\Livewire\Hotel;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $imagePath;

    public $hotel;


    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function updatedForm($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->hotel = Hotel::find($id);
        $this->title = $this->hotel->title;
        $this->description = $this->hotel->description;
        $this->imagePath = $this->hotel->image;
    }

    public function render()
    {
        return view('livewire.hotel.show')
            ->layout('layouts.master');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if ($this->image != null && $this->image->isFile()) {
            $validatedData = $this->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $name = md5($this->image . microtime()) . '.' . $this->image->extension();
            $this->image->storeAs('public/images', $name);

            Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));

            $this->hotel->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->hotel->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.hotel.show', $this->hotel->id));
    }

    public function destroy($id)
    {
        DB::table('hotels')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.hotel'));
    }
}
