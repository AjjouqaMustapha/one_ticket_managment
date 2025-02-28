<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployerRoleFactory extends Factory
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
            'employer_role' => fake()->unique()->randomElement([
                "Plombier",
                'Consultant',
                'Technicien eau',
                'Technicien electricite',
                'Modir',
                'mol Chi',
            ])
        ];
    }
}
