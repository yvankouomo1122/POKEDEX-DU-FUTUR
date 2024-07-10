<?php

namespace Database\Factories;

use App\Models\Pokemons;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemons>
 */
class PokemonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pokemons::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'name' => $this->faker->word(),
            'hp' => $this->faker->numberBetween(0, 100),
            'weight' => $this->faker->numberBetween(0, 100),
            'height' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->word()
        ];
    }
}
