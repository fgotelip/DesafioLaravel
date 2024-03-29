<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHelfcareplanRequest;
use App\Http\Requests\UpdateHelfcareplanRequest;
use App\Models\Helfcareplan;
use Illuminate\Http\Request;


class HelfcareplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helfcareplans = Helfcareplan::paginate(3);

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
    public function store(StoreHelfcareplanRequest $request)
    {
        $data = $request->validated();
        Helfcareplan::create($data);

        return redirect()->route('helfcareplan.index')->with('success', true);
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
        return view('admin.helfcareplans.edit', compact('helfcareplan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHelfcareplanRequest $request, Helfcareplan $helfcareplan)
    {
        $data = $request->validated();
        $helfcareplan->update($data);

        return redirect()->route('helfcareplan.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Helfcareplan $helfcareplan)
    {
        $helfcareplan->delete();

        return redirect()->route('helfcareplan.index')->with('success',true);
    }
}
