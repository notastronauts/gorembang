<?php

namespace App\Http\Livewire\AlunAlun;

use App\Models\AlunAlun;
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

    public $alunalun;


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
        $this->alunalun = AlunAlun::find($id);
        $this->title = $this->alunalun->title;
        $this->description = $this->alunalun->description;
        $this->imagePath = $this->alunalun->image;
    }

    public function render()
    {
        return view('livewire.alun-alun.show')
            ->layout('layouts.master');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if ($this->image!=null && $this->image->isFile()) {
            $validatedData = $this->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $name = md5($this->image . microtime()) . '.' . $this->image->extension();
            $this->image->storeAs('public/images', $name);

            Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));

            $this->alunalun->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => asset('storage/images/' . $name)
            ]);
        } else {
            $this->alunalun->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description']
            ]);
        }


        // Contact::create($validatedData);

        session()->flash('message', 'Berhasil update data.');

        return redirect(route('models.alun-alun.show', $this->alunalun->id));
    }

    public function destroy($id)
    {
        DB::table('alun_aluns')->where('id', $id)->delete();
        Storage::delete('images/' . substr($this->imagePath, strrpos($this->imagePath, '/') + 1));
        return redirect(route('models.alun-alun'));
    }
}
