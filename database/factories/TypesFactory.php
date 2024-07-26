<?php

namespace Database\Factories;

use App\Models\Types;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemons>
 */
class TypesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Types::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'name' => $this->faker->word(),
            'color' => $this->faker->word(),
            'image' => $this->faker->word()
        ];
    }
}
