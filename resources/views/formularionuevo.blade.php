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
<body>
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
                <div class="h-10 flex bg-blue-700 mb-6">
                    <h2 class="text-white self-center">Parte 1: Paciente</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-inputText label="Nombre" identificador="nombre" />
                    <x-inputText label="Apellido" identificador="apellido" />
                    <div class="col-span-4 md:col-span-2">
                        <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
                        <input type="number" id="edad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                        <input type="number" id="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <x-inputText label="Número de historia" identificador="historia" />
                    <x-datepicker label="Fecha cirugía" identificador="fecha_cirugía" />
                    <x-inputText label="Cadera" identificador="cadera" />
                    <x-inputText label="Clínica/Hospital" identificador="clinica" />
                    <x-inputText label="Cirugía de cadera previa" identificador="cirugia_previa" />
                    <x-select label="Diagnóstico" identificador="diagnostico" :options="[
                        ['value' => 'Osteoartrosis', 'label_opcion' => 'Osteoartrosis'],
                        ['value' => 'Artritis', 'label_opcion' => 'Artritis Reumatoide'],
                        ['value' => 'Necrosis', 'label_opcion' => 'Necrosis Avascular de cabeza femoral'],
                        ['value' => 'Displasia', 'label_opcion' => 'Displasia de cadera en desarrollo']
                    ]" />
                    <div class="mb-6 col-span-4 md:col-span-3">
                        <label for="tipo_cirugia" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Tipo de cirugía</label>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="primaria" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Primaria</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="revision" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Revisión</label>
                        </div>
                    </div>
                    <x-inputText label="Score de Harris" identificador="scoreHarris" />
                    <x-inputText label="Peso" identificador="peso" />
                    <x-inputText label="Talla" identificador="talla" />
                    <x-inputText label="Índice de Masa Corporal" identificador="imc" />
                    <x-inputText label="Comorbilidades" identificador="comorbilidades" />
                    <x-textArea label="Comentarios Adicionales" identificador="comentarioAdicionales" />
                </div>
            </div>

            <div class="step" id="step2" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 2: Componentes Protesicos</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-inputText label="Acetábulo/Tipo" identificador="tipoAcetabulo" />
                    <x-inputText label="Tamaño" identificador="tamano" />
                    <x-inputText label="Tamaño liner de polietileno" identificador="tamanoLiner" />
                    <x-select label="Opciones de liner" identificador="opcionesliner" :options="[
                        ['value' => 'Oxinium', 'label_opcion' => 'Oxinium'],
                        ['value' => 'Ceramico', 'label_opcion' => 'Cerámico'],
                        ['value' => 'Metal', 'label_opcion' => 'Metal'],
                        ['value' => 'Nubio', 'label_opcion' => 'Nubio'],
                        ['value' => 'Otro', 'label_opcion' => 'Otro']
                    ]" />
                    <div class="mb-6 col-span-4 md:col-span-3">
                        <label for="tipo_cirugia" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Cementado</label>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="cementadosi" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sí</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="cementadono" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                    <x-inputText label="Número de tornillos acetabulares" identificador="numTornillos" />
                    <x-inputText label="Medidas de Tornillos Acetabulares" identificador="medidasTornillos" />
                    <x-inputText label="Fémur/Tipo" identificador="tipoFemur" />
                    <x-inputText label="Medidas de Tallo" identificador="medidasTallo" />
                    <x-inputText label="Cuello" identificador="Cuello" />
                    <x-inputText label="Cabeza" identificador="Cabeza" />
                    <x-inputText label="Cono" identificador="Cono" />
                    <x-textArea label="Comentarios Adicionales" identificador="comentariosAdicionales" />
                </div>
            </div>

            <div class="step" id="step3" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 3: Otros</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-inputText label="Duración de Cirugía (minutos)" identificador="duracionCirugia" />
                    <x-inputText label="Cirujano" identificador="cirujano" />
                    <x-inputText label="1er Ayudante" identificador="primerAyudante" />
                    <x-inputText label="Segundo Ayudante" identificador="segundoAyudante" />
                    <x-inputText label="Hemoglobina Preoperatoria" identificador="hemoglobinaPreop" />
                    <x-inputText label="Hemoglobina Postoperatoria" identificador="hemoglobinaPostop" />
                    <x-inputText label="Pérdidas Hemáticas" identificador="perdidasHematicas" />
                    <x-inputText label="Anestesiólogo" identificador="anestesiologo" />
                    <x-inputText label="Tipo de Anestesia" identificador="tipoAnestesia" />
                    <x-inputText label="Abordaje" identificador="abordaje" />
                    <div class="mb-6 col-span-4 md:col-span-3">
                        <label for="necesidadSangre" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Necesidad de sangre (Sí/no)</label>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="Si" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sí</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="No" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                    <x-inputText label="Número de Unidades de Sangre" identificador="numUnidadesSangre" />
                </div>
            </div>

            <div class="step" id="step4" style="display:none;">
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 4: Complicaciones</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <div class="mb-6 col-span-4 md:col-span-3">
                        <label for="fracturasIntraoperatorias" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Fracturas Intraoperatorias (Sí/No)</label>
                        <div id="fracturasIntraoperatorias" class="flex items-center mb-4">
                            <input id="fracturasSi" type="radio" value="Si" name="fracturasIntraoperatorias" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="fracturasSi" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sí</label>
                        </div>
                        <div class="flex items-center">
                            <input id="fracturasNo" type="radio" value="No" name="fracturasIntraoperatorias" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="fracturasNo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                    <x-inputText label="Tipo de fractura (Vancouver)" identificador="tipoFractura" />
                    <x-inputText label="Tratamiento" identificador="tratamiento" />
                    <x-textArea  label="Otras Complicaciones" identificador="otrasComplicaciones" />
                    <x-inputText label="Defectos Óseos" identificador="defectosOseos" />
                    <x-radio label="Fémur" identificador="femur" opcion1="Si" opcion2="No" />
                    <x-inputText label="Praposky Tipo" identificador="praposkyTipoFemur" />
                    <x-radio label="Protrusión Fémur" identificador="protrusionFemur" opcion1="Si" opcion2="No" />
                    <x-inputText label="Praposky Tipo" identificador="praposkyTipoAcetabulo" />
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
