<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Course;
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
        $rooms = Room::all();
        $courses = Course::all();
        $users = User::all();

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

        foreach ($rooms as $room) {
            foreach ($days as $day) {
                Schedule::create([
                    'room_id' => $room->id,
                    'course_id' => $courses->id,
                    'day' => $day,
                    'time_7_9_am' => $users->isNotEmpty() ? $users->random()->id : null,
                    'time_9_11_am' => $users->isNotEmpty() ? $users->random()->id : null,
                    'time_1_3_pm' => $users->isNotEmpty() ? $users->random()->id : null,
                    'time_3_5_pm' => $users->isNotEmpty() ? $users->random()->id : null,
                ]);
            }
        }
    }
}
