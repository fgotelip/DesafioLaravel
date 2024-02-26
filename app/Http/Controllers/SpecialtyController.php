<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpecialtyRequest;
use App\Http\Requests\UpdateSpecialtyRequest;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = Specialty::all();

        return view('admin.specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialty = new Specialty();
        return view('admin.specialties.create' , compact('specialty'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialtyRequest $request)
    {
        $data = $request->validated();
        Specialty::create($data);

        return redirect()->route('specialties.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialty $specialty)
    {
        return view('admin.specialties.show', compact('specialty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialty $specialty)
    {
        return view('admin.specialties.show', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialtyRequest $request, Specialty $specialty)
    {
        $data = $request->validate();
        $specialty->update($data);

        return redirect()->route('specialties.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();
    }
}
