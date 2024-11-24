<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Mascota;
use App\Models\Noticia;
use App\Models\User;
use App\Models\Vacuna;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()
            ->withPersonalTeam()
            ->has(
                Mascota::factory()
                    ->has(
                        Vacuna::factory()->count(3)
                    )
                    ->count(5)
            )
            ->create([
                'name' => 'Test User',
                'email' => fake()->unique()->safeEmail(),
            ]);

        $this->call([
            VacunaSeeder::class,
        ]);
    }
}
