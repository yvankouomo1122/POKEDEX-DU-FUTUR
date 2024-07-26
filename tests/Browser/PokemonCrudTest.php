<?php

namespace Tests\Browser;

use App\Models\Pokemons;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Database\Factories\PokemonsFactory;
use Exception;

class PokemonCrudTest extends DuskTestCase
{
    public function testCreate(): void
    {
        $pokemon = Pokemons::first();
        if(!$pokemon){
            throw new Exception('No Pokémon found.');
        }
        
        $pokemon_image = $pokemon->image;
        $pokemon_image = str_replace('images/', '', $pokemon_image);

        $this->browse(function (Browser $browser) use ($pokemon_image){
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Pokemons')
                    ->press('Ajouter')
                    ->pause(2000)
                    ->type('[wire\\:model="name"]', 'Test')
                    ->type('[wire\\:model="hp"]', 12)
                    ->type('[wire\\:model="weight"]', 12)
                    ->type('[wire\\:model="height"]', 12)
                    ->click('[id="'.$pokemon_image.'"]')
                    ->press('Enregistrer')
                    ->pause(5000);
        });
    }

    public function testRead()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Pokemons')
                    ->assertSee('Modifier')
                    ->assertSee('Supprimer');
        });
    }

    public function testUpdate()
    {
        Pokemons::factory()->create([
            'id' => 1997,
            'name' => 'test',
            'hp' => 0,
            'weight' => 0,
            'height' => 1,
            'image' => "image/test"
        ]);
        $pokemon = Pokemons::where('id', 1997)->first();
        $pokemon_name = $pokemon->name;
        
        $this->browse(function (Browser $browser) use ($pokemon, $pokemon_name) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Pokemons')
                    ->assertSee($pokemon->name);
            
            $browser->press('[wire\\:click="edit('.$pokemon->id.')"]')
                ->pause(2000)
                ->type('[wire\\:model="name"]', 'update_name')
                ->type('[wire\\:model="hp"]', 20)
                ->type('[wire\\:model="weight"]', 20)
                ->type('[wire\\:model="height"]', 20)
                ->press("Enregistrer")
                ->pause(2000)
                ->assertDontSee($pokemon_name);
        });
    }

    public function testDelete()
    {
        $pokemon = Pokemons::where('id', 1997)->first();

        $this->browse(function (Browser $browser) use($pokemon) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Pokemons')
                    ->assertSee($pokemon->name); //Se rassure que le pokemon est bien afficher
            
            $browser->press('[wire\\:click="delete('.$pokemon->id.')"]')
                    ->pause(2000)
                    ->assertDontSee($pokemon->name); //Se rassure qu'on ne voit plus le pokemon sur l'interface
            
            $this->assertDatabaseMissing('pokemons', [
                'id' => $pokemon->id
            ]);
        });
    }
}
