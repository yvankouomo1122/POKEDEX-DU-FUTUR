<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pokemons;
use App\Models\Attack;
use App\Models\Types;
use Livewire\WithFileUploads;


class PokemonManager extends Component
{
    use WithFileUploads;
    public $image, $saved_image;
    public $pokemons, $name, $hp, $weight, $height, $type1, $type2, $pokemon_id;
    public $isOpen = 0;

    public function render()
    {
        $this->pokemons = Pokemons::all();
        $attacks = Attack::with(['pokemon', 'type'])->get();
        $types = Types::all();
        return view('livewire.pokemon-manager', compact('attacks', 'types'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {    
        if($this->pokemon_id){
            $validatedData = $this->validate([
                'name' => 'required',
                'hp' => 'required|numeric',
                'weight' => 'required|numeric',
                'height' => 'required|numeric',
                'type1' => 'nullable',
                'type2' => 'nullable',
                'image' => 'nullable|image|mimes:jpeg,png,svg,jpg,gif|max:10024',
            ]);
            if ($this->image == null){
                $imageName = $this->saved_image;
            }else{
                $imageName = $this->image->store("images", 'public');
            }
            Pokemons::updateOrCreate(['id' => $this->pokemon_id], [
                'name' => $this->name,
                'hp' => $this->hp,
                'weight' => $this->weight,
                'height' => $this->height,
                'type1' => $this->type1,
                'type2' => $this->type2,
                'image' => $imageName,
            ]);
        }
        else {
            $validatedData = $this->validate([
                'name' => 'required',
                'hp' => 'required|numeric',
                'weight' => 'required|numeric',
                'height' => 'required|numeric',
                'type1' => 'nullable',
                'type2' => 'nullable',
                'image' => 'image|mimes:jpeg,png,svg,jpg,gif|max:10024',
            ]);
            $imageName = $this->image->store("images", 'public');
            $validatedData['image'] = $imageName;
            Pokemons::create($validatedData);
        }

        session()->flash('message',
            $this->pokemon_id ? 'Pokemon Updated Successfully.' : 'Pokemon Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $pokemon = Pokemons::findOrFail($id);
        $this->pokemon_id = $id;
        $this->name = $pokemon->name;
        $this->hp = $pokemon->hp;
        $this->weight = $pokemon->weight;
        $this->height = $pokemon->height;
        $this->saved_image = $pokemon->image;

        $this->openModal();
    }

    public function delete($id)
    {
        Pokemons::find($id)->delete();
        session()->flash('message', 'Pokemon Deleted Successfully.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->hp = '';
        $this->weight = '';
        $this->height = '';
        $this->type1 = '';
        $this->type2 = '';
        $this->image = '';
        $this->pokemon_id = '';
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
