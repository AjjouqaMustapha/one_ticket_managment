<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Police>
 */
class PoliceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'adress' => fake()->address(),
            'tournnes' => fake()->biasednumberBetween(1, 10),
            'id_card' => User::all()->random()->id_card,
            'created_at' => now(),
        ];
    }
}
