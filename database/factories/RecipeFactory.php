<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'title' => fake()->word(3, 5),
        'category' => fake()->word("Entrada", "Plato fuerte", "Postre", "Bebida", "Sopa"),
        'preparation_time' => fake()->numberBetween(10, 120),
        'chef_id' => fake()->word(),
    ];
}

}
