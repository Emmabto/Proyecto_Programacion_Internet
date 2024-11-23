<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'nombre' => fake()->sentence(),
            'tipo' => fake()->randomElement(['Perro', 'Gato', 'Raton', 'Huron', 'Reptil', 'Tortuga', 'Pez']),
            'sexo' => fake()->randomElement(['Macho', 'Hembra']),
            'edad' => fake()->numberBetween(0, 15) . ' años',
            'padecimientos' => fake()->sentence(),
        ];
    }
}
