<?php

namespace Database\Factories;

use App\Models\Kategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class TesztFactory extends Factory
{
    public function definition(): array
    {
        $valaszok = $this->faker->words(4, false);
        $helyesIndex = array_rand($valaszok);

        return [
            'kerdes' => $this->faker->sentence(5) . '?',
            'v1' => $valaszok[0],
            'v2' => $valaszok[1],
            'v3' => $valaszok[2],
            'v4' => $valaszok[3],
            'helyes' => 'v' . ($helyesIndex + 1),
            'kategoria_id' => Kategoria::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}

