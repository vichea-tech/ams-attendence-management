<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\User;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if there are any users in the database
        $users = User::all();

        // If no users exist, set the created_by field to null or a default user ID
        $createdBy = $users->isEmpty() ? null : $users->random()->id;

        // Insert sample building data for buildings A to F
        Building::insert([
            [
                'name' => 'Building A',
                'code' => 'A001',
                'floor' => 5,
                'status' => true,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building B',
                'code' => 'B001',
                'floor' => 3,
                'status' => true,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building C',
                'code' => 'C001',
                'floor' => 7,
                'status' => false,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building D',
                'code' => 'D001',
                'floor' => 4,
                'status' => true,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building E',
                'code' => 'E001',
                'floor' => 6,
                'status' => true,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building F',
                'code' => 'F001',
                'floor' => 8,
                'status' => false,
                'created_by' => $createdBy,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
