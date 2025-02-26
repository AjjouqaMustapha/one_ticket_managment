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
            'tournnes' => fake()->biasedNumberBetween(1, 10),
            'id_card' => User::inRandomOrder()->first()->id_card, 
            'created_at' => now(),
        ];
    }
}
