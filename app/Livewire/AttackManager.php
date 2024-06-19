<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Attack;
use App\Models\Pokemons;
use App\Models\Types;

class AttackManager extends Component
{
    use WithFileUploads;

    public $attacks, $attack_id, $pokemon_id, $name, $image, $damage, $description, $type_id;
    public $isOpen = 0;

    public function render()
    {
        $this->attacks = Attack::with(['pokemon', 'type'])->get();
        $pokemons = Pokemons::all();
        $types = Types::all();

        return view('livewire.attack-manager', compact('pokemons', 'types'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->pokemon_id = '';
        $this->name = '';
        $this->image = '';
        $this->damage = '';
        $this->description = '';
        $this->type_id = '';
        $this->attack_id = '';
    }

    public function store()
    {
        $this->validate([
            'pokemon_id' => 'required',
            'name' => 'required',
            'damage' => 'required|integer',
            'type_id' => 'required',
            'image' => 'nullable|image|max:1024', // Example: max 1MB file size
        ]);

        $imagePath = $this->image ? $this->image->store('public/images') : null;

        Attack::updateOrCreate(['id' => $this->attack_id], [
            // 'pokemon_id' => $this->pokemon_id,
            'name' => $this->name,
            'image' => $imagePath,
            'damage' => $this->damage,
            'description' => $this->description,
            'type' => $this->type_id,
        ]);

        session()->flash('message',
            $this->attack_id ? 'Succes.' : 'Succes.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $attack = Attack::findOrFail($id);
        $this->attack_id = $id;
        // $this->pokemon_id = $attack->pokemon_id;
        $this->name = $attack->name;
        $this->image = $attack->image;
        $this->damage = $attack->damage;
        $this->description = $attack->description;
        $this->type_id = $attack->type_id;

        $this->openModal();
    }

    public function delete($id)
    {
        Attack::find($id)->delete();
        session()->flash('message', 'Succes.');
    }
}
