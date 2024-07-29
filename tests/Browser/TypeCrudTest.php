<?php

namespace Tests\Browser;

use App\Models\Types;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Database\Factories\PokemonsFactory;
use Exception;

class TypeCrudTest extends DuskTestCase
{
    public function testCreate(): void
    {
        $type = Types::first();
        if(!$type){
            throw new Exception('No type found.');
        }
        
        $type_image = $type->image;

        $this->browse(function (Browser $browser) use ($type_image){
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Types')
                    ->press('Ajouter')
                    ->pause(2000)
                    ->type('[wire\\:model="name"]', 'Name')
                    ->type('[wire\\:model="color"]', 'Color')
                    ->attach('[wire\\:model="image"]', dirname(dirname(__DIR__)).'\picachou.png')
                    ->press('Enregistrer')
                    ->pause(15000)
                    ->screenshot('pic');
        });
    }

    public function testRead()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Types')
                    ->assertSee('Modifier')
                    ->assertSee('Supprimer');
        });
    }

    public function testUpdate()
    {
        Types::factory()->create([
            'id' => 1997,
            'name' => 'Name',
            'color' => 'Color',
            'image' => "image/test"
        ]);
        $type = Types::where('id', 1997)->first();
        $type_name = $type->name;
        
        $this->browse(function (Browser $browser) use ($type, $type_name) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Types')
                    ->assertSee($type->name);
            
            $browser->press('[wire\\:click="edit('.$type->id.')"]')
                ->pause(2000)
                ->type('[wire\\:model="name"]', 'update_name')
                ->type('[wire\\:model="color"]', 'update_color')
                ->press("Enregistrer")
                ->pause(15000)
                ->screenshot('pic')
                ->assertDontSee($type_name);
        });
    }

    public function testDelete()
    {
        $type = Types::where('id', 1997)->first();

        $this->browse(function (Browser $browser) use($type) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->clickLink('Types')
                    ->assertSee($type->name);
            
            $browser->press('[wire\\:click="delete('.$type->id.')"]')
                    ->pause(2000)
                    ->assertDontSee($type->name); 
            
            $this->assertDatabaseMissing('types', [
                'id' => $type->id
            ]);
        });
    }
}
