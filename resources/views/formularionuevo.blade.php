<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-200">
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
        <form id="multiStepForm" class="w-full">
            <div class="step" id="step1" >
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 1: Paciente</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Número de historia" identificador="historia" />
                    <x-input type="text" label="Nombres" identificador="nombres" />
                    <x-input type="text" label="Apellidos" identificador="apellidos" />
                    <x-datepicker label="Fecha cirugía" identificador="fecha_cirugía" />
                    <x-input type="text" label="Cadera" identificador="cadera" />
                    <x-input type="number" label="Edad" identificador="edad" />
                    <x-input type="text" label="Clínica/Hospital" identificador="clinica" />
                    <x-input type="text" label="Cirugía de cadera previa" identificador="cirugia_previa" />
                    <x-input type="number" label="Teléfono" identificador="telefono" />
                    <x-input type="text" label="Dirección" identificador="direccion" />
                    <x-select label="Diagnóstico" identificador="diagnostico" :options="[
                        ['value' => 'Osteoartrosis', 'label_opcion' => 'Osteoartrosis'],
                        ['value' => 'Artritis', 'label_opcion' => 'Artritis Reumatoide'],
                        ['value' => 'Necrosis', 'label_opcion' => 'Necrosis Avascular de cabeza femoral'],
                        ['value' => 'Displasia', 'label_opcion' => 'Displasia de cadera en desarrollo']
                    ]" />
                    <x-radio label="Tipo de cirugía" identificador="tipoCirugia" opcion1="Primaria" opcion2="Revision" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    <x-input type="text" label="Score de Harris" identificador="scoreHarris" />
                    <x-input type="text" label="Peso" identificador="peso" />
                    <x-input type="text" label="Talla" identificador="talla" />
                    <x-input type="text" label="Índice de Masa Corporal" identificador="imc" />
                    <div class="col-span-2 md:col-span-4">
                        <x-input type="text" label="Comorbilidades" identificador="comorbilidades" />
                    </div>
                    <x-textArea label="Comentarios Adicionales" identificador="comentarioAdicionales" />
                </div>
            </div>

            <div class="step" id="step2" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 2: Componentes Protesicos</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Acetábulo/Tipo" identificador="tipoAcetabulo" />
                    <x-input type="text" label="Tamaño" identificador="tamanoAcetabulo" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    <x-input type="text" label="Tamaño liner de polietileno" identificador="tamanoLiner" />
                    <x-select label="Opciones de liner" identificador="opcionesliner" :options="[
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
                    <x-input type="text" label="Fémur/Tipo" identificador="tipoFemur" />
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
                    <div class="col-span-3 grid grid-cols-subgrid gap-4">
                        <x-input type="text" label="Duración de Cirugía (minutos)" identificador="duracionCirugia" />
                    </div>
                    <x-input type="text" label="Cirujano" identificador="cirujano" />
                    <x-input type="text" label="1er Ayudante" identificador="primerAyudante" />
                    <x-input type="text" label="Segundo Ayudante" identificador="segundoAyudante" />
                    <x-input type="text" label="Hemoglobina Preoperatoria" identificador="hemoglobinaPreop" />
                    <x-input type="text" label="Hemoglobina Postoperatoria" identificador="hemoglobinaPostop" />
                    <x-input type="text" label="Pérdidas Hemáticas" identificador="perdidasHematicas" />
                    <x-input type="text" label="Anestesiólogo" identificador="anestesiologo" />
                    <x-input type="text" label="Tipo de Anestesia" identificador="tipoAnestesia" />
                    <x-input type="text" label="Abordaje" identificador="abordaje" />
                </div>
                <div class="grid grid-cols-8 gap-6">
                    <x-radio label="Necesidad de sangre (Si/No)" identificador="necesidadSangre" opcion1="Si" opcion2="No" />
                    <div class="col-span-4">
                        <x-input label="Número de Unidades de Sangre" identificador="numUnidadesSangre" />
                    </div>
                </div>
            </div>

            <div class="step" id="step4" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 4: Complicaciones</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-radio label="Fracturas Intraoperatorias (Sí/No)" identificador="fracturasIntraoperatorias" opcion1="Si" opcion2="No" />
                    <x-input type="text" label="Tipo de fractura (Vancouver)" identificador="tipoFractura" />
                    <x-input type="text" label="Tratamiento" identificador="tratamiento" />
                    <x-textArea  label="Otras Complicaciones" identificador="otrasComplicaciones" />
                    <x-input type="text" label="Defectos Óseos" identificador="defectosOseos" />
                </div>
                <div class="grid grid-cols-8 gap-6">
                <x-radio label="Fémur" identificador="femur" opcion1="Si" opcion2="No" />
                    <div class="col-span-4">
                    <x-input type="text" label="Praposky Tipo" identificador="praposkyTipoFemur" />
                    </div>
                </div>
                <div class="grid grid-cols-8 gap-6">
                <x-radio label="Defectos óseos acetábulo" identificador="defectosOseos" opcion1="Si" opcion2="No" />
                    <div class="col-span-4">
                    <x-input type="text" label="Praposky Tipo" identificador="praposkyTipoAcetabulo" />
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-8 gap-6 mb-6">
                    <x-radio label="Protrusión Acetabular" identificador="protrusionAce" opcion1="Si" opcion2="No" />
                    <x-radio label="Discontinuidad Pélvica" identificador="discontinuidadPelvica" opcion1="Si" opcion2="No" />
                    <x-radio label="Aporte Biológico" identificador="aporteBiologico" opcion1="No" opcion2="Si" />
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
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="prevBtn" class="text-sm/6 font-semibold text-gray-900" style="display:none;" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="nextPrev(1)">Siguiente</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/multipaso.js') }}"></script>
    <script src="{{ asset('js/Scroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
