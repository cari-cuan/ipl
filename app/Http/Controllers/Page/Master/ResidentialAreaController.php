<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\ResidentialAreaModel;

class ResidentialAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.residentialArea.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.residentialArea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
        ]);

        ResidentialAreaModel::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'province' => $validatedData['province'],
            'postal_code' => $validatedData['postal_code'],
        ]);

        return redirect()->route('residential-areas.index')->with('success', 'Residential area created successfully.');
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
        $data = ResidentialAreaModel::findOrFail($id);
        return view('pages.master.residentialArea.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
        ]);

        $data = ResidentialAreaModel::findOrFail($id);
        $data->update($validatedData);

        return redirect()->route('residential-areas.index')->with('success', 'Residential area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ResidentialAreaModel::findOrFail($id);
        $data->delete();

        if (request()->ajax()) {
            return response()->json(['success' => 'Residential area deleted successfully.']);
        }

        return redirect()->route('residential-areas.index')->with('success', 'Residential area deleted successfully.');
    }
}
