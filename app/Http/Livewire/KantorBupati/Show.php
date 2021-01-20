<?php

namespace App\Http\Livewire\KantorBupati;

use App\Models\KantorBupati;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;

    public $title;
    public $address;
    public $image;
    public $imagePath;

    public $kantorbupati;


    protected $rules = [
        'title' => 'required',
        'address' => 'required'
    ];

    public function updatedForm($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->kantorbupati = KantorBupati::find($id);
        $this->title = $this->kantorbupati->title;
        $this->address = $this->kantorbupati->address;
        $this->imagePath = $this->kantorbupati->image;
    }

    public function render()
    {
        return view('livewire.kantor-bupati.show')
            ->layout('layouts.master');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if ($this->image != null && $this->image->isFile()) {
            $validatedData = $this->validate([
                'title' => 'required',
                'address' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $name = md5($this->image . microtime()) . '.' . $this->image->extension();
            $this->image->storeAs('public/images', $name);

            Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));

            $this->kantorbupati->update([
                'title' => $validatedData['title'],
                'address' => $validatedData['address'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->kantorbupati->update([
                'title' => $validatedData['title'],
                'address' => $validatedData['address']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.kantor-bupati.show', $this->kantorbupati->id));
    }

    public function destroy($id)
    {
        DB::table('kantor_bupatis')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.kantor-bupati'));
    }
}
