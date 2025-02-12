<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 'doctor',
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'role' => 'user',
        ]);
    }
}