<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SurgicalprocedureController;
use App\Http\Controllers\HelfcareplanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//-SEED
//Hash::make('suaSenha');



Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['patient'])->group(function () {
    Route::delete('/deletar_conta/paciente/{patient}', [PatientController::class, 'deleteacount'])->name('patient.delete.acount');
    Route::post('logout/paciente', [AuthenticatedSessionController::class, 'destroy'])->name('patient.logout');
    Route::get('/profile/paciente', [PatientController::class, 'editprofile'])->name('profile.patient.edit');
    Route::put('/pacientes/{patient}', [PatientController::class, 'update'])->name('patient.update');
    Route::get('/completar_cadastro', [PatientController::class, 'full'])->name('patient.full');
    Route::get('dashboard/paciente', [PatientController::class, 'dashboard'])->name('patient.dashboard');
    Route::get('/procedimentocirugico/paciente', [SurgicalprocedureController::class, 'index'])->name('surgicalprocedure.index');
    Route::get('/procedimentocirugico/create', [SurgicalprocedureController::class, 'create'])->name('surgicalprocedure.create');
    Route::post('/procedimentocirugico', [SurgicalprocedureController::class, 'store'])->name('surgicalprocedure.store');
    Route::get('/procedimentocirugico/paciente/{surgicalprocedure}', [SurgicalprocedureController::class, 'showp'])->name('surgicalprocedure.show');
    Route::delete('/procedimentocirugico/{surgicalprocedure}', [SurgicalprocedureController::class, 'destroy'])->name('surgicalprocedure.destroy');
    Route::get('/catchdoctors/{id}', [SurgicalprocedureController::class, 'catchdoctors'])->name('surgicalprocedurecatchdoctors');
});

Route::middleware(['doctor'])->group(function () {
    Route::delete('/deletar_conta/medico/{doctor}', [DoctorController::class, 'deleteacount'])->name('doctor.delete.acount');
    Route::get('/pdf', [SurgicalprocedureController::class, 'pdf'])->name('pdf');
    Route::get('/procedimentocirugico/medico', [SurgicalprocedureController::class, 'indexd'])->name('surgicalprocedure.indexd');
    Route::get('procedimentocirugico/{surgicalprocedure}', [SurgicalprocedureController::class, 'show'])->name('surgicalprocedure.showd');
    Route::put('/medicos/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::get('/profile/medico', [DoctorController::class, 'editprofile'])->name('profile.doctor.edit');
    Route::post('logout/doctor', [AuthenticatedSessionController::class, 'destroy'])->name('doctor.logout');
    Route::get('dashboard/medico', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
});

Route::middleware(['auth','patient'])->group(function () {

});

Route::middleware('auth')->group(function () {
    Route::get('/criaremail', [PatientController::class, 'mail'])->name('patient.mail');
    Route::post('/enviandoemail', [PatientController::class, 'sendmail'])->name('patient.sendmail');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/pacientes/create', [PatientController::class, 'create'])->name('patient.create');
    Route::get('/pacientes/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');
    Route::get('/pacientes/{patient}', [PatientController::class, 'show'])->name('patient.show');
    Route::post('/pacientes', [PatientController::class, 'store'])->name('patient.store');
    Route::put('/admin/{patient}', [PatientController::class, 'update'])->name('patient.admin.update');
    Route::delete('/pacientes/{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');

    Route::get('/medicos', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/medicos/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::get('/medicos/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::get('/medicos/{doctor}', [DoctorController::class, 'show'])->name('doctor.show');
    Route::post('/medicos', [DoctorController::class, 'store'])->name('doctor.store');
    Route::put('/admin/{doctor}', [DoctorController::class, 'update'])->name('doctor.admin.update');
    Route::delete('/medicos/{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');


    Route::get('/especialidades', [SpecialtyController::class, 'index'])->name('specialty.index');
    Route::get('/especialidades/create', [SpecialtyController::class, 'create'])->name('specialty.create');
    Route::get('/especialidades/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('specialty.edit');
    Route::get('/especialidades/{specialty}', [SpecialtyController::class, 'show'])->name('specialty.show');
    Route::post('/especialidades', [SpecialtyController::class, 'store'])->name('specialty.store');
    Route::put('/especialidades/{specialty}', [SpecialtyController::class, 'update'])->name('specialty.update');
    Route::delete('/especialidades/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialty.destroy');

    Route::get('/planosdesaude', [HelfcareplanController::class, 'index'])->name('helfcareplan.index');
    Route::get('/planosdesaude/create', [HelfcareplanController::class, 'create'])->name('helfcareplan.create');
    Route::get('/planosdesaude/{helfcareplan}/edit', [HelfcareplanController::class, 'edit'])->name('helfcareplan.edit');
    Route::get('/planosdesaude/{helfcareplan}', [HelfcareplanController::class, 'show'])->name('helfcareplan.show');
    Route::post('/planosdesaude', [HelfcareplanController::class, 'store'])->name('helfcareplan.store');
    Route::put('/planosdesaude/{helfcareplan}', [HelfcareplanController::class, 'update'])->name('helfcareplan.update');
    Route::delete('/planosdesaude/{helfcareplan}', [HelfcareplanController::class, 'destroy'])->name('helfcareplan.destroy');
});

require __DIR__.'/auth.php';


