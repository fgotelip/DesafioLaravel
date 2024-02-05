<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
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
    Route::get('/dashboard/paciente', function(){
        return view('dashboard');
    })->name('patient.dashboard');
});

Route::middleware(['doctor'])->group(function () {
    Route::get('/dashboard/medico', function(){
        return view('dashboard');
    })->name('doctor.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient.index');
  //Route::get('/pacientes/create', [PatientController::class, 'create'])->name('patient.create');
    Route::get('/pacientes/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');
    Route::get('/pacientes/{patient}', [PatientController::class, 'show'])->name('patient.show');
    Route::post('/pacientes', [PatientController::class, 'store'])->name('patient.store');
    Route::put('/pacientes/{patient}', [PatientController::class, 'update'])->name('patient.update');
    Route::delete('/pacientes/{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');
    
});

require __DIR__.'/auth.php';
