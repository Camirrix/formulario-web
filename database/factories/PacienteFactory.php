<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        return [
            'historia' => $this->faker->unique()->numerify('########'),
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'cedula' => $this->faker->unique()->numerify('########'),
            'edad' => $this->faker->numberBetween(1, 100),
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'fechaCirugia' => $this->faker->date,
            'cadera' => $this->faker->randomElement(['izquierda', 'derecha']),
            'clinica' => $this->faker->company,
            'cirugiaPrevia' => $this->faker->boolean,
            'diagnostico' => $this->faker->sentence,
            'tipoCirugia' => $this->faker->word,
            'scoreHarris' => $this->faker->numberBetween(0, 100),
            'peso' => $this->faker->numberBetween(40, 120),
            'talla' => $this->faker->numberBetween(140, 200),
            'imc' => $this->faker->randomFloat(2, 15, 40),
            'comorbilidades' => $this->faker->sentence,
            'comentarioAdicionales' => $this->faker->paragraph,
            // Parte 2
            'tipoAcetabulo' => $this->faker->word,
            'tamanoAcetabulo' => $this->faker->randomNumber(2),
            'tamanoLinerPoli' => $this->faker->randomNumber(2),
            'tamanoLiner' => $this->faker->randomNumber(2),
            'tipoLiner' => $this->faker->word,
            'numTornillos' => $this->faker->randomNumber(1),
            'medidasTornillos' => $this->faker->randomNumber(2),
            'tipoVastago' => $this->faker->word,
            'femurDorr' => $this->faker->word,
            'medidasTallo' => $this->faker->randomNumber(2),
            'Cuello' => $this->faker->word,
            'Cabeza' => $this->faker->word,
            'Cono' => $this->faker->word,
            'cementado' => $this->faker->boolean,
            'comentariosAdicionales' => $this->faker->paragraph,
            // Parte 3
            'duracionCirugia' => $this->faker->randomNumber(2),
            'cirujano' => $this->faker->name,
            'primerAyudante' => $this->faker->name,
            'segundoAyudante' => $this->faker->name,
            'hemoglobinaPreop' => $this->faker->randomFloat(2, 10, 20),
            'hemoglobinaPostop' => $this->faker->randomFloat(2, 10, 20),
            'perdidasHematicas' => $this->faker->randomNumber(3),
            'anestesiologo' => $this->faker->name,
            'tipoAnestesia' => $this->faker->word,
            'abordaje' => $this->faker->word,
            'necesidadSangre' => $this->faker->boolean,
            'numUnidadesSangre' => $this->faker->randomNumber(1),
            // Parte 4
            'fracturasIntraoperatorias' => $this->faker->boolean,
            'tipoFractura' => $this->faker->word,
            'tratamiento' => $this->faker->sentence,
            'otrasComplicaciones' => $this->faker->sentence,
            'defectosOseos' => $this->faker->sentence,
            'femur' => $this->faker->word,
            'praposkyTipoFemur' => $this->faker->word,
            'defectosOseosAce' => $this->faker->sentence,
            'praposkyTipoAcetabulo' => $this->faker->word,
            'protrusionAce' => $this->faker->boolean,
            'discontinuidadPelvica' => $this->faker->boolean,
            'aporteBiologico' => $this->faker->boolean,
            'tipoAporteBiologico' => $this->faker->word,
        ];
    }
}
