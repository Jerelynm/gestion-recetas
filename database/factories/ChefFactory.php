<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChefFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'specialty' => fake()->word(),
        ];
    }
}