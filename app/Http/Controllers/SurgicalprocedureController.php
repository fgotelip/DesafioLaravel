<?php

namespace App\Http\Controllers;

use App\Models\Surgicalprocedure;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSurgicalprocedureRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurgicalprocedureController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $specialties = Specialty::all();
        $surgicalprocedures = Surgicalprocedure::where('patient_id','=', Auth::guard('patient')->user()->id)->get();

        return view('admin.surgicalprocedures.index', compact('surgicalprocedures','doctors','specialties'));
    }

    public function catchdoctors(Request $request){
        $catch = Doctor::where('specialty_id','=',$request->id)->get();
        return response()->json($catch);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        $specialties = Specialty::all();
        $surgicalprocedure = new Surgicalprocedure();
        return view('admin.surgicalprocedures.create' , compact('surgicalprocedure','doctors','specialties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSurgicalprocedureRequest $request)
    {
        $data = $request->validated();
        $data['patient_id'] = Auth::guard('patient')->user()->id;
        Surgicalprocedure::create($data);

        return redirect()->route('surgicalprocedure.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Surgicalprocedure $surgicalprocedure)
    {
        $doctors = Doctor::all();
        $specialties = Specialty::all();
        return view('admin.surgicalprocedures.show', compact('surgicalprocedure','doctors','specialties'));
    }

    public function destroy(Surgicalprocedure $surgicalprocedure)
    {
        $surgicalprocedure->delete();

        return redirect()->route('surgicalprocedure.index')->with('success',true);
    }
}