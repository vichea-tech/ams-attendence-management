<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the schedules.
     */
    public function index()
    {
        $schedules = Schedule::with(['room', 'course', 'time7_9amUser', 'time9_11amUser', 'time1_3pmUser', 'time3_5pmUser'])->get();
        return response()->json($schedules, 200);
    }

    /**
     * Store a newly created schedule in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validated = $request->validate([
                'room_id' => 'required|exists:rooms,id',
                'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'time_7_9_am' => 'nullable|exists:users,id',
                'time_9_11_am' => 'nullable|exists:users,id',
                'time_1_3_pm' => 'nullable|exists:users,id',
                'time_3_5_pm' => 'nullable|exists:users,id',
            ]);

            // Check if a schedule already exists for this room and day
            $existingSchedule = Schedule::where('room_id', $validated['room_id'])
                ->where('day', $validated['day'])
                ->first();

            if ($existingSchedule) {
                return response()->json([
                    'message' => 'Schedule already exists for this room and day',
                    'schedule' => $existingSchedule
                ], 409); // HTTP 409 Conflict
            }

            // Create the schedule
            $schedule = Schedule::create($validated);

            return response()->json([
                'message' => 'Schedule created successfully',
                'schedule' => $schedule
            ], 201);
        } catch (\Exception $e) {
            // \Log::error('Error creating schedule: ' . $e->getMessage());

            return response()->json([
                'message' => 'Failed to create schedule',
                'error' => $e->getMessage()
            ], 500);
        }
    }



    /**
     * Display the specified schedule.
     */
    public function show($id)
    {
        $schedule = Schedule::with(['room', 'time7_9amUser', 'time9_11amUser', 'time1_3pmUser', 'time3_5pmUser'])->findOrFail($id);
        return response()->json($schedule, 200);
    }

    /**
     * Update the specified schedule in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // Find the schedule
            $schedule = Schedule::findOrFail($id);

            // Validate the request data
            $validated = $request->validate([
                'room_id' => 'sometimes|exists:rooms,id',
                'day' => 'sometimes|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
                'time_7_9_am' => 'nullable|exists:users,id',
                'time_9_11_am' => 'nullable|exists:users,id',
                'time_1_3_pm' => 'nullable|exists:users,id',
                'time_3_5_pm' => 'nullable|exists:users,id',
            ]);

            // Update the schedule
            $schedule->update($validated);

            return response()->json([
                "message" => "Schedule updated successfully",
                "schedule" => $schedule
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["message" => "Schedule not found"], 404);
        } catch (\Exception $e) {
            // \Log::error('Error updating schedule: ' . $e->getMessage());
            return response()->json([
                "message" => "Failed to update schedule",
                "error" => $e->getMessage()
            ], 500);
        }
    }



    /**
     * Remove the specified schedule from storage.
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return response()->json(['message' => 'Schedule deleted successfully.'], 200);
    }
}
