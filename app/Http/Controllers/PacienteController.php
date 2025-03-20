<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr; // nueva línea
use App\Models\Paciente; // Asegúrate de tener el modelo creado

class PacienteController extends Controller
{
    public function store(Request $request)
    {
        // Validación básica: ajusta las reglas según necesites
        $validated = $request->validate([
            'historia'         => 'nullable|string',
            'nombres'          => 'nullable|string',
            'apellidos'        => 'nullable|string',
            'cedula'           => 'nullable|numeric',
            'edad'             => 'nullable|integer',
            'telefono'         => 'nullable|string',
            'direccion'        => 'nullable|string',
            'fechaCirugia'    => 'nullable|date',
            'cadera'           => 'nullable|string',
            'clinica'          => 'nullable|string',
            'cirugiaPrevia'   => 'nullable|string',
            'diagnostico'      => 'nullable|string',
            'TonnisOsteo'      => 'nullable|string',
            'OtrosDiagnostico'   => 'nullable|string',
            'tipoCirugia'      => 'nullable|string',
            'scoreHarris'      => 'nullable|string',
            'peso'             => 'nullable|numeric',
            'talla'            => 'nullable|numeric',
            'imc'              => 'nullable|string',
            'comorbilidades'   => 'nullable|string',
            'comentarioAdicionales' => 'nullable|string',
            'tipoAcetabulo'    => 'nullable|string',
            'tamanoAcetabulo'  => 'nullable|string',
            'tamanoLinerPoli'  => 'nullable|string',
            'tamanoLiner'      => 'nullable|string',
            'tipoLiner'        => 'nullable|string',
            'numTornillos'     => 'nullable|integer',
            'medidasTornillos' => 'nullable|string',
            'tipoVastago'      => 'nullable|string',
            'femurDorr'        => 'nullable|string',
            'medidasTallo'     => 'nullable|string',
            'Cuello'           => 'nullable|string',
            'Cabeza'           => 'nullable|string',
            'Cono'             => 'nullable|string',
            'cementado'        => 'nullable|string',
            'comentariosAdicionales' => 'nullable|string',
            'duracionCirugia'  => 'nullable|integer',
            'cirujano'         => 'nullable|string',
            'primerAyudante'   => 'nullable|string',
            'segundoAyudante'  => 'nullable|string',
            'hemoglobinaPreop' => 'nullable|numeric',
            'hemoglobinaPostop' => 'nullable|numeric',
            'perdidasHematicas' => 'nullable|string',
            'anestesiologo'    => 'nullable|string',
            'tipoAnestesia'    => 'nullable|string',
            'abordaje'         => 'nullable|string',
            'necesidadSangre'  => 'nullable|string',
            'numUnidadesSangre' => 'nullable|integer',
            'fracturasIntraoperatorias' => 'nullable|string',
            'tipoFractura'     => 'nullable|string',
            'tratamiento'      => 'nullable|string',
            'otrasComplicaciones'   => 'nullable|string',
            'defectosOseos'    => 'nullable|string',
            'femur'            => 'nullable|string',
            'praposkyTipoFemur' => 'nullable|string',
            'defectosOseosAce' => 'nullable|string',
            'praposkyTipoAcetabulo' => 'nullable|string',
            'protrusionAce'    => 'nullable|string',
            'discontinuidadPelvica' => 'nullable|string',
            'aporteBiologico'  => 'nullable|string',
            'tipoAporteBiologico' => 'nullable|array', // se valida como array
            'tipoAporteBiologicoOtros' => 'nullable|string'
        ]);

        // Aplanar completamente el arreglo de tipoAporteBiologico
        if (isset($validated['tipoAporteBiologico'])) {
            $validated['tipoAporteBiologico'] = Arr::flatten($validated['tipoAporteBiologico']);
        }

        // Guarda los datos en la base de datos
        Paciente::create($validated);

        // Redirige o muestra un mensaje
        return redirect()->back()->with('success', '¡Formulario enviado con éxito!');
    }

    public function update(Request $request, $id)
    {
        // Validación básica para campo y valor
        $validated = $request->validate([
            'campo' => 'required|string',
            'valor' => 'nullable|string',
        ]);

        $paciente = Paciente::findOrFail($id);
        if (!in_array($validated['campo'], $paciente->getFillable())) {
            if ($request->ajax()) {
                return response()->json(['error' => 'Campo inválido'], 400);
            }
            return redirect()->back()->with('error', 'Campo inválido');
        }

        $campo = $validated['campo'];
        $valor = $validated['valor'];
        $paciente->$campo = $valor;
        $paciente->save();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'campo' => $campo, 'valor' => $valor]);
        }

        return redirect()->back()->with('success', 'Campo actualizado correctamente');
    }
}
