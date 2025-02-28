<?php

namespace Database\Factories;
use App\Models\EmployerRole;
use App\Models\Police;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class IssuesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->sentence(),
            'id_card' => function () {
                return User::inRandomOrder()->first()->id_card;
            },
            'police_id' => function (array $attributes) {
                return Police::where('id_card', $attributes['id_card'])->inRandomOrder()->first()->id ?? Police::factory()->create(['id_card' => $attributes['id_card']])->id;
            },
            'status' => 0,
            'role' => fake()->randomElement([
                "Plombier",
                'Consultant',
                'Technicien eau',
                'Technicien electricite',
                'Modir',
                'mol Chi',
            ]),
            'created_at' => now(),
        ];
    }
}
