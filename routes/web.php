<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Pokemoncard;
use App\Livewire\Details;
use App\Livewire\CreatePokemon;
use App\Livewire\AttackManager;
use App\Livewire\PokemonManager;
// use App\Http\Controllers\AttackController;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PokemonController;
use App\Livewire\TypeManager;

Route::get('/types', TypeManager::class);

Route::get('/attacks', AttackManager::class);

// Route::get('/attacks', [AttackController::class, 'index'])->name('attacks.index');

Route::get('/pokemons', PokemonManager::class)->name('pokemons.index');



Route::get('/', Pokemoncard::class);
Route::get('/counter', Counter::class);
Route::get('/details/{id?}', Details::class);
Route::get('/gestion/pokemon/', CreatePokemon::class);
