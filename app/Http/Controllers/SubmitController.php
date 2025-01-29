<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of submits.
     */
    public function index()
    {
        $submits = Submit::all();
        return response()->json($submits);
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
