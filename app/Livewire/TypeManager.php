<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Types;

class TypeManager extends Component
{
    use WithFileUploads;

    public $types, $name, $color, $image, $type_id;
    public $isOpen = 0;

    public function render()
    {
        $this->types = Types::all();
        return view('livewire.type-manager');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'color' => 'required',
            'image' => 'nullable|image|max:10024', // Example: max 1MB file size
        ]);

        $imagePath = $this->image ? $this->image->store('public/images') : null;

        Types::updateOrCreate(['id' => $this->type_id], [
            'name' => $this->name,
            'color' => $this->color,
            'image' => $imagePath,
        ]);

        session()->flash('message',
            $this->type_id ? 'Type Updated Successfully.' : 'Type Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $type = Types::findOrFail($id);
        $this->type_id = $id;
        $this->name = $type->name;
        $this->color = $type->color;
        // Assuming 'image' is a string field representing the image path
        $this->image = $type->image;

        $this->openModal();
    }

    public function delete($id)
    {
        Types::find($id)->delete();
        session()->flash('message', 'Type Deleted Successfully.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->color = '';
        $this->image = '';
        $this->type_id = '';
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
}
