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
                // Shuffle courses to assign different ones for different time slots
                $assignedCourses = $courses->shuffle();

                Schedule::create([
                    'room_id' => $room->id,
                    'course_id' => $assignedCourses->get(0)->id ?? null, // First course
                    'day' => $day,
                    'time_7_9_am' => $users->isNotEmpty() ? $users->random()->id : null,
                ]);

                Schedule::create([
                    'room_id' => $room->id,
                    'course_id' => $assignedCourses->get(1)->id ?? null, // Second course
                    'day' => $day,
                    'time_9_11_am' => $users->isNotEmpty() ? $users->random()->id : null,
                ]);

                Schedule::create([
                    'room_id' => $room->id,
                    'course_id' => $assignedCourses->get(2)->id ?? null, // Third course
                    'day' => $day,
                    'time_1_3_pm' => $users->isNotEmpty() ? $users->random()->id : null,
                ]);

                Schedule::create([
                    'room_id' => $room->id,
                    'course_id' => $assignedCourses->get(3)->id ?? null, // Fourth course
                    'day' => $day,
                    'time_3_5_pm' => $users->isNotEmpty() ? $users->random()->id : null,
                ]);
            }
        }
    }
}
