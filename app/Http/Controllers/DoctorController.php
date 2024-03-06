<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::paginate(3);

        return view('admin.doctors.index', compact('doctors'));
    }

    public function full(Doctor $doctor)
    {
        $specialties = Specialty::all();
        return view('admin.doctors.fullregister', compact('doctor','specialties'));
    }

    public function dashboard(Doctor $doctor)
    {
        $specialties = Specialty::all();
        return view('admin.doctors.dashboard', compact('doctor','specialties'));
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
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->validated();
        
        $data['pic'];
        $file = $request->file('pic');
        $nameimg = $file->getClientOriginalName();
        $file->storeAs('public/medicos', $nameimg);
        $data['pic']=$nameimg;

        Doctor::create($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('doctor.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        $specialties = Specialty::all();
        return view('admin.doctors.show', compact('doctor','specialties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $specialties = Specialty::all();
        return view('admin.doctors.edit', compact('doctor','specialties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();
            $data['pic'];
            $file = $request->file('pic');
            $nameimg = $file->getClientOriginalName();
            $file->storeAs('public/medicos', $nameimg);
            $data['pic']=$nameimg;
        $doctor->update($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('doctor.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctor.index')->with('success',true);
    }
}
