<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the first few rooms and users to assign
        $rooms = Room::all();
        $users = User::all();

        // Example schedule data
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

        foreach ($rooms as $room) {
            foreach ($days as $day) {
                Schedule::create([
                    'room_id' => $room->id,  // Assigning the room
                    'day' => $day,  // Assigning the day of the week
                    'time_7_9_am' => $users->isNotEmpty() ? $users->random()->id : null, // Random user or null
                    'time_9_11_am' => $users->isNotEmpty() ? $users->random()->id : null, // Random user or null
                    'time_1_3_pm' => $users->isNotEmpty() ? $users->random()->id : null, // Random user or null
                    'time_3_5_pm' => $users->isNotEmpty() ? $users->random()->id : null, // Random user or null
                ]);
            }
        }
    }
}
