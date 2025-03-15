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

Route::get('/login', function () {
    return view('login.login');
})->name('login.login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    // Usuario y contraseña hardcodeados
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === '123') {
        // Se podría guardar en sesión, por ejemplo:
        session(['user' => $username]);
        return redirect()->route('admin.pacientes.index');
    }

    return back()->withErrors(['login' => 'Credenciales incorrectas.']);
})->name('login.perform');
