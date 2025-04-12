<?php

namespace Database\Seeders;
use App\Models\Kategoria;
use App\Models\Teszt;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Kategoria::factory()->create(['kategorianev' => 'Frontend']);
        Kategoria::factory()->create(['kategorianev' => 'Backend']);
        Teszt::factory(10)->create();
    }
}
