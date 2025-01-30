<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Submit;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of submits.
     */
    public function index(Request $request)
    {
        // Get filters from the request
        $userId = $request->input('user_id'); // Filter by user
        $startDate = $request->input('start_date'); // Filter by start date
        $endDate = $request->input('end_date'); // Filter by end date

        // Query to fetch submits with related room, building, and user data
        $query = Submit::with(['room.building', 'user']); // Added room.building

        // Apply user filter
        if ($userId) {
            $query->where('user_id', $userId);
        }

        // Apply period (start_date and end_date) filter
        if ($startDate && $endDate) {
            $query->whereBetween('submitted_date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('submitted_date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('submitted_date', '<=', $endDate);
        }

        // Paginate the results
        $submits = $query->paginate(10); // Paginate with 10 items per page

        // Return paginated results as JSON
        return response()->json($submits);
    }




    public function isValidSubmit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|string',
            'room_id' => 'required|string',
            'day' => 'required|string',
        ]);

        // Fetch the schedule where room_id and day match
        $schedule = Schedule::where('room_id', $request->room_id)
            ->where('day', $request->day)
            ->first();

        // If no schedule is found, return a custom error response
        if (!$schedule) {
            return response()->json(['message' => 'No schedule found for the given room and day'], 404);
        }

        // Get the current time in the format HH:mm
        // $currentTime = now()->format('H:i');
        $currentTime = '10:00';

        // Determine the time slot based on the current time
        if ($currentTime >= '07:00' && $currentTime <= '09:00') {
            $userId = $schedule->time_7_9_am;
            $timeSlot = '7:00 - 9:00';
        } elseif ($currentTime > '09:00' && $currentTime <= '11:00') {
            $userId = $schedule->time_9_11_am;
            $timeSlot = '9:00 - 11:00';
        } elseif ($currentTime > '13:00' && $currentTime <= '15:00') {
            $userId = $schedule->time_1_3_pm;
            $timeSlot = '1:00 - 3:00';
        } elseif ($currentTime > '15:00' && $currentTime <= '17:00') {
            $userId = $schedule->time_3_5_pm;
            $timeSlot = '3:00 - 5:00';
        } else {
            // If the current time doesn't fall within any schedule
            return response()->json(['message' => 'No available time slot'], 400);
        }

        // Check if the time slot has an assigned user
        if (!$userId) {
            return response()->json(['message' => "No user assigned for the time slot: $timeSlot"], 400);
        }

        if ($userId != $request->user_id) {
            return response()->json(['message' => "User not found for the current time slot"], 400);
        }

        // Return the user_id and time slot
        return response()->json([
            'user_id' => $userId,
            'time_slot' => $timeSlot,
            'message' => 'User found for the current time slot',
        ], 200);
    }



    /**
     * Store a newly created submit in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:class,makeup,other',
            'note' => 'nullable|string',
        ]);

        // Create a new submit record
        $submit = Submit::create([
            'room_id' => $request->room_id,
            'user_id' => $request->user_id,
            'submitted_date' => now(),
            'type' => $request->type,
            'note' => $request->note,
        ]);

        return response()->json($submit, 201);  // Return the created submit with HTTP 201 status
    }

    /**
     * Display the specified submit.
     */
    public function show($id)
    {
        $submit = Submit::findOrFail($id);
        return response()->json($submit);
    }

    /**
     * Update the specified submit in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:class,makeup,other',
            'note' => 'nullable|string',
        ]);

        // Find the submit record to update
        $submit = Submit::findOrFail($id);

        // Update the submit
        $submit->update([
            'room_id' => $request->room_id,
            'user_id' => $request->user_id,
            'submitted_date' => now(),
            'type' => $request->type,
            'note' => $request->note,
        ]);

        return response()->json($submit);
    }

    /**
     * Remove the specified submit from storage.
     */
    public function destroy($id)
    {
        $submit = Submit::findOrFail($id);
        $submit->delete();

        return response()->json(null, 204);  // No content response after successful deletion
    }
}
