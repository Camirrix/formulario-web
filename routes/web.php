<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AdminPacienteController;

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

Route::get('/', function () {
    return view('formulario');
});

Route::post('/paciente', [PacienteController::class, 'store'])->name('paciente.store');

Route::get('/admin', [AdminPacienteController::class, 'index'])->name('admin.pacientes.index');
Route::get('/admin/paciente/{id}', [AdminPacienteController::class, 'show'])->name('admin.paciente.show');
Route::get('/admin/pacientes/{id}', [AdminPacienteController::class, 'show'])->name('admin.pacientes.show');
