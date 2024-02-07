<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Helfcareplan;
use Illuminate\Http\Request;

class HelfcareplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helfcareplans = Helfcareplan::all();

        return view('admin.helfcareplans.index', compact('helfcareplans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $helfcareplan = new Helfcareplan();
        return view('admin.helfcareplans.create' , compact('helfcareplan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Helfcareplan::create($data);

        return redirect()->route('helfcareplans.index')->with('sucess', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Helfcareplan $helfcareplan)
    {
        return view('admin.helfcareplans.show', compact('helfcareplan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Helfcareplan $helfcareplan)
    {
        return view('admin.helfcareplans.show', compact('helfcareplan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Helfcareplan $helfcareplan)
    {
        $data = $request->all();
        $helfcareplan->update($data);

        return redirect()->route('helfcareplans.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Helfcareplan $helfcareplan)
    {
        $helfcareplan->delete();
    }
}
