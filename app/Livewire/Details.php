<?php

namespace App\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;
use App\Models\Pokemons;

class Details extends Component
{
    public function render(Request $request)
    {
        $id = $request->id;
        $pok = Pokemons::findOrFail($id);
        // var_dump($pok);
        return view('livewire.details', compact('pok'));
    }
}
