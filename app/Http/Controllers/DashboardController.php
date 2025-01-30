<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Building;
use App\Models\Room;
use App\Models\Schedule;
use App\Models\Submit;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'users_count' => User::count(),
            'courses_count' => Course::count(),
            'buildings_count' => Building::count(),
            'rooms_count' => Room::count(),
            'submits_count' => Submit::count(),
            'schedules_count' => Schedule::count(),
        ];

        return response()->json($data);
    }
}
