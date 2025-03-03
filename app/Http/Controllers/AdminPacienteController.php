<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class AdminPacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::select('nombres', 'apellidos', 'cedula', 'fechaCirugia', 'clinica','historia', 'tipoCirugia','id')->get();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.show', compact('paciente'));
    }
}
