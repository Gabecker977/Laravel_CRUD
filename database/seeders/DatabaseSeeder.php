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

        \App\Models\User::factory()->create([
            'name' => 'Gab',
            'email' => 'gab@gmail.com',
            'password'=>'$2y$10$vV/iTwViScqGfT/v.rz3tuMDsg5aMPJi5f9qtlyC4I3Q5woGvVwIq'
        ]);
    }
}
