<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pokemons;

class Pokemoncard extends Component
{
    public $poks;
    public $pk = '';

    public function mount()
    {
        $this->poks = Pokemons::all();
    }

    public function render()
    {
        return view('livewire.pokemoncard', ['pokemons' => $this->poks]);
    }

    public function search()
    {
        $this->poks = Pokemons::where('name', 'like', '%' . $this->pk . '%')->get();
    }
}
