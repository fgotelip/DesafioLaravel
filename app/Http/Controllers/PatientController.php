<?php

namespace App\Http\Controllers;

use App\Events\ComunicatePatientsEvent;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Helfcareplan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(3);

        return view('admin.patients.index', compact('patients'));
    }

    public function full(Patient $patient)
    {
        $helfcareplans = Helfcareplan::all();
        return view('admin.patients.fullregister', compact('patient','helfcareplans'));
    }

    public function editprofile(Patient $patient)
    {
        $helfcareplans = Helfcareplan::all();
        return view('admin.patients.editprofile', compact('patient','helfcareplans'));
    }

    public function dashboard(Patient $patient)
    {
        $helfcareplans = Helfcareplan::all();
        return view('admin.patients.dashboard', compact('patient','helfcareplans'));
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
        if($data['pic']){
            $file = $request->file('pic');
            $nameimg = $file->getClientOriginalName();
            $file->storeAs('public/paciente', $nameimg);
            $data['pic']=$nameimg;
        };
       
        Patient::create($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('patient.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $helfcareplans = Helfcareplan::all();
        return view('admin.patients.show', compact('patient','helfcareplans'));
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
        $data = $request->validated();
        if(array_key_exists('pic', $data)){
            $file = $request->file('pic');
            $nameimg = $file->getClientOriginalName();
            $file->storeAs('public/paciente', $nameimg);
            $data['pic']=$nameimg;
        };
        $patient->update($data);

        $data['password'] = Hash::make($data['password']);

        return redirect()->route('patient.index')->with('success', true);
    }

    public function mail()
    {
        return view('admin.patients.mail');
    }

    public function sendmail(Request $request)
    {
        $evento = new ComunicatePatientsEvent(
            $request->conteudo,
        );
        event($evento);
        return redirect()->route('patient.mail')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        
        return redirect()->route('patient.index')->with('success', true);
    }

    public function deleteacount(Patient $patient)
    {
        $patient->delete();
        
        return redirect()->route('login')->with('success', true);
    }
}
