<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\PerumahanModel;

class PerumahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.master.perumahan.perumahan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.perumahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'report_date' => 'required|numeric',
            'bank_account_number' => 'required|string|max:50',
            'bank_name' => 'required|string|max:100',
            'bank_account_name' => 'required|string|max:100',
        ]);

        $product = PerumahanModel::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'report_date' => $validatedData['report_date'],
            'bank_account_number' => $validatedData['bank_account_number'],
            'bank_name' => $validatedData['bank_name'],
            'bank_account_name' => $validatedData['bank_account_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect atau response
        return redirect()->route('perumahan')->with('success', 'Perumahan berhasil ditambahkan.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
