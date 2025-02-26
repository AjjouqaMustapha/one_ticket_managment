<?php

namespace Database\Factories;

use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('ajjou123'),
            'role' => $this->faker->randomElement([
                "Plombier",
                'Consultant',
                'Technicien eau',
                'Technicien electricite',
                'Modir',
                'mol Chi',
            ]),
        ];
    }
}
