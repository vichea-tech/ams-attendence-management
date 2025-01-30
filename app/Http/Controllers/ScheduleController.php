<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    /**
     * Display all schedules for a given room.
     */
    public function index($room_id)
    {
        $schedules = Schedule::with([
            'room',
            'time7_9AmTeacher', 'time7_9AmCourse',
            'time9_11AmTeacher', 'time9_11AmCourse',
            'time1_3PmTeacher', 'time1_3PmCourse',
            'time3_5PmTeacher', 'time3_5PmCourse'
        ])->where('room_id', $room_id)->get();

        return response()->json(['data' => $schedules], 200);
    }

    /**
     * Store a new schedule.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required|exists:rooms,id',
            'day' => 'required|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',

            'time_7_9_am' => 'nullable|exists:users,id',
            'time_7_9_am_course' => 'nullable|exists:courses,id',

            'time_9_11_am' => 'nullable|exists:users,id',
            'time_9_11_am_course' => 'nullable|exists:courses,id',

            'time_1_3_pm' => 'nullable|exists:users,id',
            'time_1_3_pm_course' => 'nullable|exists:courses,id',

            'time_3_5_pm' => 'nullable|exists:users,id',
            'time_3_5_pm_course' => 'nullable|exists:courses,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $schedule = Schedule::create($request->all());

        return response()->json(['data' => $schedule], 201);
    }

    /**
     * Update an existing schedule.
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);

        if (!$schedule) {
            return response()->json(['message' => 'Schedule not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'room_id' => 'sometimes|exists:rooms,id',
            'day' => 'sometimes|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',

            'time_7_9_am' => 'nullable|exists:users,id',
            'time_7_9_am_course' => 'nullable|exists:courses,id',

            'time_9_11_am' => 'nullable|exists:users,id',
            'time_9_11_am_course' => 'nullable|exists:courses,id',

            'time_1_3_pm' => 'nullable|exists:users,id',
            'time_1_3_pm_course' => 'nullable|exists:courses,id',

            'time_3_5_pm' => 'nullable|exists:users,id',
            'time_3_5_pm_course' => 'nullable|exists:courses,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $schedule->update($request->all());

        return response()->json(['data' => $schedule], 200);
    }

    /**
     * Delete a schedule.
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);

        if (!$schedule) {
            return response()->json(['message' => 'Schedule not found'], 404);
        }

        $schedule->delete();
        return response()->json(['message' => 'Schedule deleted successfully'], 200);
    }

    public function getTimetableByUser($userId)
    {
        $schedules = Schedule::with(['room', 'teacher7_9', 'course7_9', 'teacher9_11', 'course9_11', 'teacher1_3', 'course1_3', 'teacher3_5', 'course3_5'])
            ->where(function ($query) use ($userId) {
                $query->where('time_7_9_am', $userId)
                    ->orWhere('time_9_11_am', $userId)
                    ->orWhere('time_1_3_pm', $userId)
                    ->orWhere('time_3_5_pm', $userId);
            })
            ->get();

        $timetable = [
            'Monday' => [],
            'Tuesday' => [],
            'Wednesday' => [],
            'Thursday' => [],
            'Friday' => [],
            'Saturday' => [],
            'Sunday' => [],
        ];

        foreach ($schedules as $schedule) {
            $day = $schedule->day;

            $timetable[$day]['7:00 - 9:00'][] = [
                'room' => $schedule->room->name ?? null,
                'course' => $schedule->course7_9->name ?? null,
                'teacher' => $schedule->teacher7_9->name ?? null,
            ];

            $timetable[$day]['9:00 - 11:00'][] = [
                'room' => $schedule->room->name ?? null,
                'course' => $schedule->course9_11->name ?? null,
                'teacher' => $schedule->teacher9_11->name ?? null,
            ];

            $timetable[$day]['1:00 - 3:00'][] = [
                'room' => $schedule->room->name ?? null,
                'course' => $schedule->course1_3->name ?? null,
                'teacher' => $schedule->teacher1_3->name ?? null,
            ];

            $timetable[$day]['3:00 - 5:00'][] = [
                'room' => $schedule->room->name ?? null,
                'course' => $schedule->course3_5->name ?? null,
                'teacher' => $schedule->teacher3_5->name ?? null,
            ];
        }

        return response()->json(['timetable' => $timetable], 200);
    }
}
