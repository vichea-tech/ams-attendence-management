<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['name' => 'Database Management'],
            ['name' => 'Networking Fundamentals'],
            ['name' => 'Software Engineering'],
            ['name' => 'Mathematics for IT'],
            ['name' => 'Artificial Intelligence'],
            ['name' => 'Data Structures and Algorithms'],
            ['name' => 'Web Development'],
            ['name' => 'Mobile Development'],
            ['name' => 'Computer Security'],
            ['name' => 'Computer Architecture'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
