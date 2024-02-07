<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctor = new Doctor();
        $specialties = Specialty::all();
        return view('admin.doctors.create' , compact('doctor','specialties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Doctor::create($data);

        return redirect()->route('doctors.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $specialties = Specialty::all();
        return view('admin.doctors.show', compact('doctor','specialties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->all();
        $doctor->update($data);

        return redirect()->route('doctors.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
    }
}
