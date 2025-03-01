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
        'tipoCirugia',
        'scoreHarris',
        'peso',
        'talla',
        'imc',
        'comorbilidades',
        'comentarioAdicionales',
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
        'tipoAporteBiologico'
    ];
}
