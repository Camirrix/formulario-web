<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'historia',
        'nombres',
        'apellidos',
        'cedula',
        'edad',
        'telefono',
        'direccion',
        'fechaCirugia',
        'cadera',
        'clinica',
        'cirugiaPrevia',
        'diagnostico',
        'TonnisOsteo',
        'OtrosDiagnostico',
        'tipoCirugia',
        'scoreHarris',
        'peso',
        'talla',
        'imc',
        'comorbilidades',
        'comentarioAdicionales',

        //Parte 2
        'tipoAcetabulo',
        'tamanoAcetabulo',
        'tamanoLinerPoli',
        'tamanoLiner',
        'tipoLiner',
        'numTornillos',
        'medidasTornillos',
        'tipoVastago',
        'femurDorr',
        'medidasTallo',
        'Cuello',
        'Cabeza',
        'Cono',
        'cementado',
        'comentariosAdicionales',

        //Parte 3
        'duracionCirugia',
        'cirujano',
        'primerAyudante',
        'segundoAyudante',
        'hemoglobinaPreop',
        'hemoglobinaPostop',
        'perdidasHematicas',
        'anestesiologo',
        'tipoAnestesia',
        'abordaje',
        'necesidadSangre',
        'numUnidadesSangre',

        //Parte 4
        'fracturasIntraoperatorias',
        'tipoFractura',
        'tratamiento',
        'otrasComplicaciones',
        'defectosOseos',
        'femur',
        'praposkyTipoFemur',
        'defectosOseosAce',
        'praposkyTipoAcetabulo',
        'protrusionAce',
        'discontinuidadPelvica',
        'aporteBiologico',
        'tipoAporteBiologico',
        'tipoAporteBiologicoOtros'
    ];

    // Añade el cast para 'tipoAporteBiologico'
    protected $casts = [
        'tipoAporteBiologico' => 'array',
    ];

    // Método para serializar atributos JSON sin escapado de caracteres
    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
