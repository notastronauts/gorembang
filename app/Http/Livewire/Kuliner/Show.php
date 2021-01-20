<?php

namespace App\Http\Livewire\Kuliner;

use App\Models\Kuliner;
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

    public $kuliner;


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
        $this->kuliner = Kuliner::find($id);
        $this->title = $this->kuliner->title;
        $this->description = $this->kuliner->description;
        $this->imagePath = $this->kuliner->image;
    }

    public function render()
    {
        return view('livewire.kuliner.show')
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

            $this->kuliner->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->kuliner->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.kuliner.show', $this->kuliner->id));
    }

    public function destroy($id)
    {
        DB::table('kuliners')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.kuliner'));
    }
}
