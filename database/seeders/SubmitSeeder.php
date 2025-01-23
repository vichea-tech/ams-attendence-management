<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\Submit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get some rooms and users to assign
        $rooms = Room::all();
        $users = User::all();

        // Example submit data
        $types = ['class', 'makeup', 'other'];

        // Check if there are rooms and users to avoid errors
        if ($rooms->isEmpty() || $users->isEmpty()) {
            return;
        }

        // Insert sample data into 'submits'
        foreach ($users as $user) {
            foreach ($rooms as $room) {
                Submit::create([
                    'room_id' => $room->id,
                    'user_id' => $user->id,
                    'submitted_date' => now(),
                    'type' => $types[array_rand($types)],  // Random type ('class', 'makeup', or 'other')
                    'note' => 'This is a sample note.',
                ]);
            }
        }
    }
}
