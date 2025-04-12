<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategorianev' => $this->faker->randomElement(['Frontend', 'Backend', 'Teszt', 'Szerver']),
        ];
    }
}

