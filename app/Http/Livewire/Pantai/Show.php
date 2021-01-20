<?php

namespace App\Http\Livewire\Pantai;

use App\Models\Pantai;
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

    public $pantai;


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
        $this->pantai = Pantai::find($id);
        $this->title = $this->pantai->title;
        $this->description = $this->pantai->description;
        $this->imagePath = $this->pantai->image;
    }

    public function render()
    {
        return view('livewire.pantai.show')
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

            $this->pantai->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->pantai->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.pantai.show', $this->pantai->id));
    }

    public function destroy($id)
    {
        DB::table('pantais')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.pantai'));
    }
}