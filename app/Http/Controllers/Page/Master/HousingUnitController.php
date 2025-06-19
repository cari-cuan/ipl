<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\ResidentModel;
use App\Models\Master\ResidentialAreaModel;
use App\Models\Master\HousingUnitModel;

class HousingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.housingUnit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residentialAreas = ResidentialAreaModel::all();
        $residents = ResidentModel::all();
        return view('pages.master.housingUnit.create', compact('residentialAreas', 'residents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'residential_area_id' => 'required|numeric|max:255',
            'resident_id' => 'required|numeric|max:255',
            'unit_code' => 'required|string|max:150',
            'block' => 'required|string|max:150',
            'floor_area' => 'required|string|max:150',
            'ownership_status' => 'required|string|max:50',
        ]);

        HousingUnitModel::create([
            'residential_area_id' => $validatedData['residential_area_id'],
            'resident_id' => $validatedData['resident_id'],
            'unit_code' => $validatedData['unit_code'],
            'block' => $validatedData['block'],
            'floor_area' => $validatedData['floor_area'],
            'ownership_status' => $validatedData['ownership_status'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('housing-units.index')->with('success', 'Housing unit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = HousingUnitModel::findOrFail($id);
        $residentialAreas = ResidentialAreaModel::all();
        $residents = ResidentModel::all();
        return view('pages.master.housingUnit.edit', compact('data', 'residentialAreas', 'residents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'residential_area_id' => 'required|numeric|max:255',
            'resident_id' => 'required|numeric|max:255',
            'unit_code' => 'required|string|max:150',
            'block' => 'required|string|max:150',
            'floor_area' => 'required|string|max:150',
            'ownership_status' => 'required|string|max:50',
        ]);

        $housingUnit = HousingUnitModel::findOrFail($id);
        $housingUnit->update([
            'residential_area_id' => $validatedData['residential_area_id'],
            'resident_id' => $validatedData['resident_id'],
            'unit_code' => $validatedData['unit_code'],
            'block' => $validatedData['block'],
            'floor_area' => $validatedData['floor_area'],
            'ownership_status' => $validatedData['ownership_status'],
            'updated_at' => now(),
        ]);

        return redirect()->route('housing-units.index')->with('success', 'Housing unit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $housingUnit = HousingUnitModel::findOrFail($id);
        $housingUnit->delete();

        if (request()->ajax()) {
            return response()->json(['success' => 'Housing unit deleted successfully.']);
        }

        return redirect()->route('housing-units.index')->with('success', 'Housing unit deleted successfully.');
    }
}
