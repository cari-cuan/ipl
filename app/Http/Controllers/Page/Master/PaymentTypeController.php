<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\PaymentTypeModel;
use App\Models\Master\ResidentialAreaModel;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residentialAreas = ResidentialAreaModel::all();
        return view('pages.master.paymentType.index', compact('residentialAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.paymentType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'is_recurring' => 'boolean',
            'description' => 'nullable|string|max:500',
        ]);

        PaymentTypeModel::create([
            'name' => $validatedData['name'],
            'is_recurring' => $validatedData['is_recurring'] ?? false,
            'description' => $validatedData['description'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('payment-types.index')->with('success', 'Payment type created successfully.');
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
        $data = PaymentTypeModel::findOrFail($id);
        return view('pages.master.paymentType.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'is_recurring' => 'boolean',
            'description' => 'nullable|string|max:500',
        ]);

        $paymentType = PaymentTypeModel::findOrFail($id);
        $paymentType->update([
            'name' => $validatedData['name'],
            'is_recurring' => $validatedData['is_recurring'] ?? false,
            'description' => $validatedData['description'],
            'updated_at' => now(),
        ]);

        return redirect()->route('payment-types.index')->with('success', 'Payment type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymentType = PaymentTypeModel::findOrFail($id);
        $paymentType->delete();

        if (request()->ajax()) {
            return response()->json(['success' => 'Payment type deleted successfully.']);
        }
        return redirect()->route('payment-types.index')->with('success', 'Payment type deleted successfully.');
    }
}
