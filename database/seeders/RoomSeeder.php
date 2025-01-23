<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'building_id' => 1,
                'name' => 'Room 101',
                'floor' => 1,
                'status' => true,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'building_id' => 1,
                'name' => 'Room 102',
                'floor' => 1,
                'status' => true,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'building_id' => 2,
                'name' => 'Room 201',
                'floor' => 2,
                'status' => true,
                'created_by' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'building_id' => 3,
                'name' => 'Room 301',
                'floor' => 3,
                'status' => false,
                'created_by' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
