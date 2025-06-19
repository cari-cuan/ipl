<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\ResidentModel;
use App\Models\Master\ResidentialAreaModel;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.resident.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residentialAreas = ResidentialAreaModel::all();
        return view('pages.master.resident.create', compact('residentialAreas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'residential_area_id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'ktp_number' => 'required|string|max:255',
            'is_owner' => 'boolean',
            'join_date' => 'required|string|max:100',
        ]);

        ResidentModel::create([
            'residential_area_id' => $validatedData['residential_area_id'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'ktp_number' => $validatedData['ktp_number'],
            'is_owner' => $validatedData['is_owner'],
            'join_date' => $validatedData['join_date'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('resident.index')->with('success', 'Resident created successfully.');
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
        $data = ResidentModel::findOrFail($id);
        $residentialAreas = ResidentialAreaModel::all();
        return view('pages.master.resident.edit', compact('data', 'residentialAreas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'residential_area_id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'ktp_number' => 'required|string|max:255',
            'is_owner' => 'boolean',
            'join_date' => 'required|string|max:100',
        ]);

        $resident = ResidentModel::findOrFail($id);
        $resident->update([
            'residential_area_id' => $validatedData['residential_area_id'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'ktp_number' => $validatedData['ktp_number'],
            'is_owner' => $validatedData['is_owner'],
            'join_date' => $validatedData['join_date'],
            'updated_at' => now(),
        ]);

        return redirect()->route('resident.index')->with('success', 'Resident updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resident = ResidentModel::findOrFail($id);
        $resident->delete();

        if (request()->ajax()) {
            return response()->json(['success' => 'Resident deleted successfully.']);
        }
        return redirect()->route('resident.index')->with('success', 'Resident deleted successfully.');
    }
}
