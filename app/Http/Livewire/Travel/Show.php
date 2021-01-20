<?php

namespace App\Http\Livewire\Travel;

use App\Models\Travel;
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

    public $travel;


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
        $this->travel = Travel::find($id);
        $this->title = $this->travel->title;
        $this->description = $this->travel->description;
        $this->imagePath = $this->travel->image;
    }

    public function render()
    {
        return view('livewire.travel.show')
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

            $this->travel->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->travel->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.travel.show', $this->travel->id));
    }

    public function destroy($id)
    {
        DB::table('travel')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.travel'));
    }
}
