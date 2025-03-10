<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Admin::factory()->count(10)->create();
        \App\Models\EmployerRole::factory()->count(6)->create();
        \App\Models\Employer::factory()->count(10)->create();
        \App\Models\Police::factory()->count(10)->create();
        \App\Models\Issues::factory()->count(10)->create();
    }
}
