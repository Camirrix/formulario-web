<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();

            // Parte 1: Paciente
            $table->string('historia')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->date('fecha_cirugia')->nullable();
            $table->string('cadera')->nullable();
            $table->integer('edad')->nullable();
            $table->string('clinica')->nullable();
            $table->string('cirugia_previa')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('tipoCirugia')->nullable();
            $table->string('scoreHarris')->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('talla', 5, 2)->nullable();
            $table->string('imc')->nullable();
            $table->text('comorbilidades')->nullable();
            $table->text('comentarioAdicionales')->nullable();

            // Parte 2: Componentes Protésicos
            $table->string('tipoAcetabulo')->nullable();
            $table->string('tamanoAcetabulo')->nullable();
            $table->string('tamanoLinerPoli')->nullable();
            $table->string('tamanoLiner')->nullable();
            $table->string('opcionesLiner')->nullable(); // proveniente del select para opciones de liner
            $table->integer('numTornillos')->nullable();
            $table->string('medidasTornillos')->nullable();
            $table->string('tipoFemur')->nullable();
            $table->string('medidasTallo')->nullable();
            $table->string('Cuello')->nullable();
            $table->string('Cabeza')->nullable();
            $table->string('Cono')->nullable();
            $table->string('cementado')->nullable();
            $table->text('comentariosAdicionales')->nullable();

            // Parte 3: Otros
            $table->integer('duracionCirugia')->nullable(); // en minutos
            $table->string('cirujano')->nullable();
            $table->string('primerAyudante')->nullable();
            $table->string('segundoAyudante')->nullable();
            $table->decimal('hemoglobinaPreop', 4, 2)->nullable();
            $table->decimal('hemoglobinaPostop', 4, 2)->nullable();
            $table->string('perdidasHematicas')->nullable();
            $table->string('anestesiologo')->nullable();
            $table->string('tipoAnestesia')->nullable();
            $table->string('abordaje')->nullable();
            $table->string('necesidadSangre')->nullable();
            $table->integer('numUnidadesSangre')->nullable();

            // Parte 4: Complicaciones
            $table->string('fracturasIntraoperatorias')->nullable();
            $table->string('tipoFractura')->nullable();
            $table->string('tratamiento')->nullable();
            $table->text('otrasComplicaciones')->nullable();
            $table->string('defectosOseos')->nullable();
            $table->string('femur')->nullable();
            $table->string('praposkyTipoFemur')->nullable();
            $table->string('defectosOseosAce')->nullable();
            $table->string('praposkyTipoAcetabulo')->nullable();
            $table->string('protrusionAce')->nullable();
            $table->string('discontinuidadPelvica')->nullable();
            $table->string('aporteBiologico')->nullable();
            $table->string('tipoAporteBiologico')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
