<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BuildingSeeder::class,
            RoomSeeder::class,
            ScheduleSeeder::class,  // Add ScheduleSeeder here
            SubmitSeeder::class,
        ]);
    }
}
