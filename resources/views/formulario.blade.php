@extends('layouts.app')

@section('title', 'Formulario')

@section('content')
    <div class="flex flex-col items-center justify-center p-5 bg-white rounded-lg shadow-lg max-w-4xl mx-auto">
        <div class="flex items-center justify-between w-full mb-5">
            <div>
                <img src="{{ asset('images/DrLuis.jpg') }}" alt="logo" class="w-18 h-20 mx-auto mb-5 object-cover">
            </div>
            <div>
                <img src="{{ asset('images/LaVina.jpg') }}" alt="logo" class="w-20 h-20 mx-auto mb-5 object-cover">
            </div>
        </div>
        <h1 class="text-xl font-bold text-gray-800 mb-5">Formulario para recolección de datos en artroplastia total de cadera primarias y de revisión
        utilizadas en el Centro Policlinico “La Viña”.</h1>
        <form id="multiStepForm" method="POST" action="{{ route('paciente.store') }}" class="w-full">
            @csrf
            <div class="step" id="step1" >
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 1: Paciente</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Número de historia" identificador="historia" />
                    <x-input type="text" label="Nombres" identificador="nombres" />
                    <x-input type="text" label="Apellidos" identificador="apellidos" />
                    <x-input type="number" label="Cédula" identificador="cedula" />
                    <x-input type="number" label="Edad" identificador="edad" />
                    <x-input type="number" label="Teléfono" identificador="telefono" />
                    <x-input type="text" label="Dirección" identificador="direccion" />
                    <x-datepicker label="Fecha cirugía" identificador="fechaCirugia" />
                    <x-radio label="Cadera" identificador="cadera" opcion1="Izquierda" opcion2="Derecha"/>
                    <x-input type="text" label="Clínica/Hospital" identificador="clinica" />
                    <x-input type="text" label="Cirugía de cadera previa" identificador="cirugia_previa" />
                    <x-select label="Diagnóstico" identificador="diagnostico" :options="[
                        ['value' => 'Osteoartrosis', 'label_opcion' => 'Osteoartrosis'],
                        ['value' => 'Artritis', 'label_opcion' => 'Artritis Reumatoide'],
                        ['value' => 'Necrosis', 'label_opcion' => 'Necrosis Avascular de cabeza femoral'],
                        ['value' => 'Displasia', 'label_opcion' => 'Displasia de cadera en desarrollo']
                    ]" />
                    <x-radio label="Tipo de cirugía" identificador="tipoCirugia" opcion1="Primaria" opcion2="Revision" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    <x-input type="number" label="Score de Harris" identificador="scoreHarris" />
                    <x-input type="number" label="Peso (kg)" identificador="peso" />
                    <x-input type="number" label="Talla (cm)" identificador="talla" />
                    <x-input type="text" label="Índice de Masa Corporal" identificador="imc" />
                    <div class="col-span-4 md:col-span-4">
                        <x-input type="text" label="Comorbilidades" identificador="comorbilidades" />
                    </div>
                    <x-textArea label="Comentarios Adicionales" identificador="comentarioAdicionales" />
                </div>
            </div>

            <div class="step" id="step2" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 2: Componentes protésicos</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Acetábulo/Tipo" identificador="tipoAcetabulo" />
                    <x-input type="text" label="Tamaño" identificador="tamanoAcetabulo" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6 mb-5">
                    <x-input type="text" label="Tamaño liner de polietileno" identificador="tamanoLinerPoli" />
                    <x-select label="Tipo de liner" identificador="tipoLiner" :options="[
                            ['value' => 'Oxinium', 'label_opcion' => 'Oxinium'],
                            ['value' => 'Ceramico', 'label_opcion' => 'Cerámico'],
                            ['value' => 'Metal', 'label_opcion' => 'Metal'],
                            ['value' => 'Nubio', 'label_opcion' => 'Nubio'],
                            ['value' => 'Otro', 'label_opcion' => 'Otro']
                        ]" />
                    <x-input type="text" label="Tamaño" identificador="tamanoLiner" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Número de tornillos acetabulares" identificador="numTornillos" />
                    <x-input type="text" label="Medidas de Tornillos Acetabulares" identificador="medidasTornillos" />
                    <x-input type="text" label="Tipo de vástago femoral" identificador="tipoVastago" />
                    <x-select label="Femur Dorr" identificador="femurDorr" :options="[
                            ['value' => 'A', 'label_opcion' => 'A'],
                            ['value' => 'B', 'label_opcion' => 'B'],
                            ['value' => 'C', 'label_opcion' => 'C']
                        ]" />
                    <x-input type="text" label="Medidas de Tallo" identificador="medidasTallo" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    <x-input type="text" label="Cuello" identificador="Cuello" />
                    <x-input type="text" label="Cabeza" identificador="Cabeza" />
                    <x-input type="text" label="Cono" identificador="Cono" />
                    <x-radio label="Cementado" identificador="cementado" opcion1="Si" opcion2="No" />
                    <x-textArea label="Comentarios Adicionales" identificador="comentariosAdicionales" />
                </div>
            </div>

            <div class="step" id="step3" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 3: Otros</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <div class="col-span-4 md:col-span-2 grid grid-cols-subgrid gap-4">
                        <x-input type="text" label="Duración de la cirugía (minutos)" identificador="duracionCirugia" />
                    </div>
                    <x-input type="text" label="Cirujano" identificador="cirujano" />
                    <x-input type="text" label="Primer ayudante" identificador="primerAyudante" />
                    <x-input type="text" label="Segundo ayudante" identificador="segundoAyudante" />
                    <x-input type="text" label="Hemoglobina preoperatoria" identificador="hemoglobinaPreop" />
                    <x-input type="text" label="Hemoglobina postoperatoria" identificador="hemoglobinaPostop" />
                    <x-input type="text" label="Pérdidas hemáticas (aproximadas)" identificador="perdidasHematicas" />
                    <x-input type="text" label="Anestesiólogo" identificador="anestesiologo" />
                    <x-input type="text" label="Tipo de anestesia" identificador="tipoAnestesia" />
                    <x-input type="text" label="Abordaje" identificador="abordaje" />
                </div>
                <div class="grid grid-cols-8 gap-6">
                    <x-radio label="Necesidad de sangre" identificador="necesidadSangre" opcion1="Si" opcion2="No" />
                    <div class="col-span-8 md:col-span-4 hidden" id="numUnidadesSangreContainer">
                        <x-select label="Número de unidades de sangre" identificador="numUnidadesSangre" :options="[
                            ['value' => '1', 'label_opcion' => '1 Unidad'],
                            ['value' => '2', 'label_opcion' => '2 Unidades'],
                            ['value' => '3', 'label_opcion' => '3 Unidades']
                        ]" />
                    </div>
                </div>
            </div>


            <div class="step" id="step4" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 4: Complicaciones</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-radio label="Fracturas Intraoperatorias" identificador="fracturasIntraoperatorias" opcion1="Si" opcion2="No" />
                    <div class="hidden col-span-4 md:col-span-2" id="tipoFracturaContainer">
                        <x-select label="Tipo de fractura" identificador="tipoFractura" :options="[
                                ['value' => '1', 'label_opcion' => 'Vancouver'],
                                ['value' => '2', 'label_opcion' => 'Vancouver'],
                                ['value' => '3', 'label_opcion' => 'Vancouver']
                            ]" />
                    </div>
                    <div class="hidden col-span-4 md:col-span-2" id="tratamientoContainer">
                        <x-input type="text" label="Tratamiento" identificador="tratamiento" />
                    </div>
                    <x-textArea  label="Otras Complicaciones" identificador="otrasComplicaciones" />
                    <x-input type="text" label="Defectos Óseos" identificador="defectosOseos" />
                </div>
                <div class="grid grid-cols-8 gap-6 mb-4">
                    <x-radio label="Fémur" identificador="femur" opcion1="Si" opcion2="No"/>
                    <div class="col-span-4 hidden" id="praposkyTipoFemurContainer">
                        <x-input type="text" label="Praposky Tipo" identificador="praposkyTipoFemur" />
                    </div>
                </div>
                <div class="grid grid-cols-8 gap-6 mb-6">
                    <x-radio label="Defectos óseos acetábulo" identificador="defectosOseosAce" opcion1="Si" opcion2="No" />
                    <div class="col-span-4 hidden" id="praposkyTipoAcetabuloContainer">
                        <x-input type="text" label="Praposky Tipo" identificador="praposkyTipoAcetabulo" />
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-8 gap-6 mb-6">
                    <x-radio label="Protrusión Acetabular" identificador="protrusionAce" opcion1="Si" opcion2="No" />
                    <x-radio label="Discontinuidad Pélvica" identificador="discontinuidadPelvica" opcion1="Si" opcion2="No" />
                    <x-radio label="Aporte Biológico" identificador="aporteBiologico" opcion1="No" opcion2="Si" />
                    <div class="col-span-4 hidden" id="tipoAporteBiologicoContainer">
                        <x-select label="Tipo de Aporte Biológico" identificador="tipoAporteBiologico" :options="[
                            ['value' => 'Forma', 'label_opcion' => 'Forma'],
                            ['value' => 'Injerto Óseo en Chip', 'label_opcion' => 'Injerto Óseo en Chip'],
                            ['value' => 'Pila de Monedas', 'label_opcion' => 'Pila de Monedas'],
                            ['value' => 'Injerto Óseo Estructural de Cabeza de Fémur', 'label_opcion' => 'Injerto Óseo Estructural de Cabeza de Fémur'],
                            ['value' => 'Médula Ósea', 'label_opcion' => 'Médula Ósea'],
                            ['value' => 'Otros', 'label_opcion' => 'Otros']
                        ]" />
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="prevBtn" class="text-sm/6 font-semibold text-gray-900" style="display:none;" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="nextPrev(1)">Siguiente</button>
            </div>
        </form>
        <div id="successMessage" class="hidden text-center">
            <h2 class="text-2xl font-bold text-green-600 mt-7">¡Formulario enviado con éxito!</h2>
            <p class="mt-3 mb-10 text-gray-600">Gracias por tu colaboración.</p>
        </div>
    </div>
@endsection
