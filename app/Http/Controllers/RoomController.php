<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the rooms.
     */
    public function index()
    {
        $rooms = Room::with('building')->get();
        return response()->json($rooms, 200);
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'building_id' => 'required|exists:buildings,id',
            'name' => 'required|string|max:50',
            'floor' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        $validated['created_by'] = auth()->id();

        $room = Room::create($validated);

        return response()->json($room, 201);
    }

    /**
     * Display the specified room.
     */
    public function show($id)
    {
        $room = Room::with('building')->findOrFail($id);
        return response()->json($room, 200);
    }

    /**
     * Update the specified room in storage.
     */
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
            'building_id' => 'sometimes|exists:buildings,id',
            'name' => 'sometimes|string|max:50',
            'floor' => 'nullable|integer',
            'status' => 'sometimes|boolean',
        ]);

        $room->update($validated);

        return response()->json($room, 200);
    }

    /**
     * Remove the specified room from storage.
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return response()->json(['message' => 'Room deleted successfully.'], 200);
    }
}
