<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all buildings
        $buildings = Building::all();
        return response()->json($buildings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:buildings',
            'floor' => 'required|integer|min:1',
        ]);

        // Create new building
        $building = Building::create($request->all());

        return response()->json([
            'message' => 'Building created successfully.',
            'building' => $building
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find building by ID
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['message' => 'Building not found.'], 404);
        }

        return response()->json($building);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'name' => 'string|max:255',
            'code' => 'string|max:50|unique:buildings,code,' . $id,
            'floor' => 'integer|min:1',
            'status' => 'in:active,inactive',
            'created_by' => 'integer',
        ]);

        // Find building by ID
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['message' => 'Building not found.'], 404);
        }

        // Update building
        $building->update($request->all());

        return response()->json([
            'message' => 'Building updated successfully.',
            'building' => $building
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find building by ID
        $building = Building::find($id);

        if (!$building) {
            return response()->json(['message' => 'Building not found.'], 404);
        }

        // Delete building
        $building->delete();

        return response()->json(['message' => 'Building deleted successfully.']);
    }
}
