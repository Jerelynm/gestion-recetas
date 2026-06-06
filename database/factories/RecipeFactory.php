<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->words(rand(3, 5), true),
            'category' => fake()->randomElement([
                'entrada',
                'plato fuerte',
                'postre',
                'bebida',
                'sopa',
            ]),
            'preparation_time' => fake()->numberBetween(10, 120),
        ];
    }
}
