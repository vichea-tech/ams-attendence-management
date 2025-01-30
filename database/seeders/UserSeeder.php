<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'), // Make sure to hash the password
        ]);
        // Teacher user
        User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'role' => 'teacher',
            'password' => Hash::make('123'),
        ]);

        // Normal user
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => Hash::make('123'),
        ]);
    }
}
