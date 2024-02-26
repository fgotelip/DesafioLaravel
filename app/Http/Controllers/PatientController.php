<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Helfcareplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();

        return view('admin.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $helfcareplans = Helfcareplan::all();
        $patient = new Patient();
        return view('admin.patients.create' , compact('patient','helfcareplans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        $data = $request->validated();
        Patient::create($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('patients.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('admin.patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        $helfcareplans = Helfcareplan::all();
        return view('admin.patients.edit', compact('patient','helfcareplans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $data = $request->validate();
        $patient->update($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('patients.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        
        return redirect()->route('patients.index')->with('sucess', true);
    }
}
