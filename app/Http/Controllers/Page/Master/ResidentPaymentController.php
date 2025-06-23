<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\ResidentPaymentModel;
use App\Models\Master\ResidentModel;
use App\Models\Master\PaymentTypeModel;

class ResidentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.residentPayment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residents = ResidentModel::all();
        $paymentTypes = PaymentTypeModel::all();
        return view('pages.master.residentPayment.create', compact('residents', 'paymentTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'resident_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'amount' => 'required|numeric|min:0',
            'payment_month' => 'required|date',
            'notes' => 'nullable|string|max:500',
            'event_name' => 'nullable|string|max:255',
        ]);

        ResidentPaymentModel::create([
            'resident_id' => $validatedData['resident_id'],
            'payment_type_id' => $validatedData['payment_type_id'],
            'amount' => $validatedData['amount'],
            'payment_month' => $validatedData['payment_month'],
            'payment_status' => '',
            'notes' => $validatedData['notes'],
            'event_name' => $validatedData['event_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('resident-payments.index')->with('success', 'Resident payment created successfully.');
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
        $data = ResidentPaymentModel::findOrFail($id);
        $residents = ResidentModel::all();
        $paymentTypes = PaymentTypeModel::all();
        return view('pages.master.residentPayment.edit', compact('data', 'residents', 'paymentTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'resident_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'amount' => 'required|numeric|min:0',
            'payment_month' => 'required|date',
            'notes' => 'nullable|string|max:500',
            'event_name' => 'nullable|string|max:255',
        ]);

        $residentPayment = ResidentPaymentModel::findOrFail($id);
        $residentPayment->update([
            'resident_id' => $validatedData['resident_id'],
            'payment_type_id' => $validatedData['payment_type_id'],
            'amount' => $validatedData['amount'],
            'payment_month' => $validatedData['payment_month'],
            'notes' => $validatedData['notes'],
            'event_name' => $validatedData['event_name'],
            'updated_at' => now(),
        ]);

        return redirect()->route('resident-payments.index')->with('success', 'Resident payment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $residentPayment = ResidentPaymentModel::findOrFail($id);
        $residentPayment->delete();

        if(request()->ajax()) {
            return response()->json(['success' => 'Resident payment deleted successfully.']);
        }

        return redirect()->route('resident-payments.index')->with('success', 'Resident payment deleted successfully.');
    }
}
