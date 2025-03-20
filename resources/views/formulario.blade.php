@extends('layouts.app')

@section('content')
    <div class="mt-4 flex flex-col items-center justify-center p-5 form-bg bg-white rounded-lg shadow-lg max-w-4xl mx-auto">
        <div class="flex items-center justify-between w-full mb-5">
            <div>
                <img src="{{ asset('images/DrLuis.png') }}" alt="logo" class="w-18 h-20 mx-auto mb-5 object-cover">
            </div>
            <div>
                <img src="{{ asset('images/LaVina.jpg') }}" alt="logo" class="w-20 h-20 mx-auto mb-5 object-cover">
            </div>
        </div>
        <h1 class="text-xl font-bold text-gray-800 mb-5">Formulario para recolección de datos en artroplastia total de cadera primarias y de revisión
        utilizadas en el postoperatorio en el programa de entrenamiento de reemplazos articulares de cadera y rodilla "Dr. Luis Silva Cisneros".</h1>
        <form id="multiStepForm" method="POST" action="{{ route('paciente.store') }}" class="w-full">
            @csrf
            <div class="step bg-[url({{ asset('images/LaVina.jpg') }})]" id="step1" >
                <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5">Parte 1: Paciente</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-input type="text" label="Número de historia" identificador="historia" clase="1"/>
                    <x-input type="number" label="Edad" identificador="edad" clase="1"/>
                    <x-input type="text" label="Nombres" identificador="nombres" />
                    <x-input type="text" label="Apellidos" identificador="apellidos" />
                    <x-input type="number" label="Cédula" identificador="cedula" />
                    <x-input type="number" label="Teléfono" identificador="telefono" />
                    <x-input type="text" label="Dirección" identificador="direccion" />
                    <x-datepicker label="Fecha cirugía" identificador="fechaCirugia" />
                    <x-radio label="Cadera" identificador="cadera" opcion1="Izquierda" opcion2="Derecha" opcion3="Bilateral"/>
                    <x-input type="text" label="Clínica/Hospital" identificador="clinica" />
                    <x-input type="text" label="Cirugía de cadera previa" identificador="cirugiaPrevia" />
                    <x-select label="Diagnóstico" identificador="diagnostico" :options="[
                        ['value' => 'Fractura', 'label_opcion' => 'Fractura'],
                        ['value' => 'Osteoartrosis', 'label_opcion' => 'Osteoartrosis'],
                        ['value' => 'Artritis', 'label_opcion' => 'Artritis reumatoide'],
                        ['value' => 'Necrosis', 'label_opcion' => 'Necrosis avascular de cabeza femoral'],
                        ['value' => 'Displasia', 'label_opcion' => 'Displasia de cadera en desarrollo'],
                        ['value' => 'Otros', 'label_opcion' => 'Otros']
                    ]" />
                    <div id="tonnisOsteoContainer" class="col-span-2 w-full hidden">
                        <x-select label="Osteoartrosis" identificador="TonnisOsteo" modal="si" direccion="imagen3.png" :options="[
                            ['value' => 'Grado1', 'label_opcion' => 'Tonnis grado 0'],
                            ['value' => 'Grado1', 'label_opcion' => 'Tonnis grado 1'],
                            ['value' => 'Grado2', 'label_opcion' => 'Tonnis grado 2'],
                            ['value' => 'Grado3', 'label_opcion' => 'Tonnis grado 3']
                        ]" />
                    </div>
                    <div id="otrosDiagnosticoContainer" class="col-span-2 w-full hidden">
                        <x-input type="text" label="Otros diagnósticos" identificador="OtrosDiagnostico" />
                    </div>
                    <x-radio label="Tipo de cirugía" identificador="tipoCirugia" opcion1="Primaria" opcion2="Revision" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    <div class="col-span-4 md:col-span-2">
                        <x-input type="number" label="Score de Harris" identificador="scoreHarris" enlace="https://www.orthopaedicscore.com/scorepages/harris_hip_score.html?textfield=&textfield=&one=0&seven=0&two=11&eight=0&three=2&nine=2&four=0&ten=0&yn1=0&twelve=0&thirteen=0&fourteen=0&six=3.75&reset=Reiniciar&total=18.75"/>
                        <p id="scoreHarrisMessage" class="mt-2 text-sm text-gray-600"></p>
                    </div>
                    <x-input type="number" label="Peso (kg)" identificador="peso" />
                    <x-input type="number" label="Talla (cm)" identificador="talla" />
                    <div class="col-span-4 md:col-span-2">
                        <x-input type="text" label="Índice de Masa Corporal" identificador="imc" />
                        <p id="imcMessage" class="mt-2 text-sm text-gray-600"></p>
                    </div>
                    <div class="col-span-4 md:col-span-4">
                        <x-input type="text" label="Comorbilidades" identificador="comorbilidades" />
                    </div>
                    <x-textArea label="Comentarios adicionales" identificador="comentarioAdicionales" />
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
                    <x-input type="text" label="Medidas de tornillos acetabulares" identificador="medidasTornillos" />
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
                    <x-radio label="Fracturas intraoperatorias" identificador="fracturasIntraoperatorias" opcion1="Si" opcion2="No" />
                    <div class="hidden col-span-4 md:col-span-2" id="tipoFracturaContainer">
                        <x-select label="Tipo de fractura" identificador="tipoFractura" modal="si" direccion="imagen4.jpg" :options="[
                                ['value' => 'A1', 'label_opcion' => 'A1 (Perforación cortical)'],
                                ['value' => 'A2', 'label_opcion' => 'A2 (Grieta lineal no desplazada)'],
                                ['value' => 'A3', 'label_opcion' => 'A3 (Fractura desplazada inestable)'],
                                ['value' => 'B1', 'label_opcion' => 'B1 (Perforación cortical)'],
                                ['value' => 'B2', 'label_opcion' => 'B2 (Grieta lineal no desplazada)'],
                                ['value' => 'B3', 'label_opcion' => 'B3 (Fractura desplazada inestable)'],
                                ['value' => 'C1', 'label_opcion' => 'C1 (Perforación cortical)'],
                                ['value' => 'C2', 'label_opcion' => 'C2 (Grieta lineal no desplazada)'],
                                ['value' => 'C3', 'label_opcion' => 'C3 (Fractura desplazada inestable)']
                            ]" />
                    </div>
                    <div class="hidden col-span-4 md:col-span-2" id="tratamientoContainer">
                        <x-input type="text" label="Tratamiento" identificador="tratamiento" />
                    </div>
                    <x-textArea  label="Otras Complicaciones" identificador="otrasComplicaciones" />
                    <x-input type="text" label="Defectos óseos" identificador="defectosOseos" />
                </div>
                <div class="grid grid-cols-4 md:grid-cols-8 gap-6 mb-4">
                    <x-radio label="Fémur" identificador="femur" opcion1="Si" opcion2="No"/>
                    <div class="col-span-4 hidden" id="praposkyTipoFemurContainer">
                    <x-select label="Praposky tipo" identificador="praposkyTipoFemur" modal="si" direccion="imagen2.png" :options="[
                                ['value' => '1', 'label_opcion' => 'I'],
                                ['value' => '2A', 'label_opcion' => 'II-A'],
                                ['value' => '2B', 'label_opcion' => 'II-B'],
                                ['value' => '2C', 'label_opcion' => 'II-C'],
                                ['value' => '3A', 'label_opcion' => 'III-A'],
                                ['value' => '3B', 'label_opcion' => 'III-B'],
                                ['value' => '3C', 'label_opcion' => 'III-C']
                            ]" />
                    </div>
                </div>
                <div class="grid grid-cols-4 md:grid-cols-8 gap-6 mb-6">
                    <x-radio label="Defectos óseos acetábulo" identificador="defectosOseosAce" opcion1="Si" opcion2="No" />
                    <div class="col-span-4 hidden" id="praposkyTipoAcetabuloContainer">´
                        <x-select label="Praposky tipo" identificador="praposkyTipoAcetabulo" modal="si" direccion="imagen1.png" :options="[
                                ['value' => '1', 'label_opcion' => 'Tipo I'],
                                ['value' => '2A', 'label_opcion' => 'Tipo II-A'],
                                ['value' => '2B', 'label_opcion' => 'Tipo II-B'],
                                ['value' => '2C', 'label_opcion' => 'Tipo II-C'],
                                ['value' => '3A', 'label_opcion' => 'Tipo III-A'],
                                ['value' => '3B', 'label_opcion' => 'Tipo III-B']
                            ]" />
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <x-radio label="Protrusión acetabular" identificador="protrusionAce" opcion1="Si" opcion2="No" />
                    <x-radio label="Discontinuidad pélvica" identificador="discontinuidadPelvica" opcion1="Si" opcion2="No" />
                    <x-radio label="Aporte biológico" identificador="aporteBiologico" opcion1="No" opcion2="Si" />
                    <div class="col-span-4 hidden" id="tipoAporteBiologicoContainer">
                        <x-checkboxmulti
                            identificador="tipoAporteBiologico"
                            name="tipoAporteBiologico[]"
                            label="Tipo de aporte biológico"
                            :options="[
                                ['value' => 'Aloinjerto', 'label' => 'Aloinjerto de láminas de tibia'],
                                ['value' => 'AutoinjertoCresta', 'label' => 'Autoinjerto de cresta ilíaca'],
                                ['value' => 'AutoinjertoPerone', 'label' => 'Autoinjerto de peroné'],
                                ['value' => 'Vascularizado', 'label' => 'Vascularizado'],
                                ['value' => 'NoVascularizado', 'label' => 'No vascularizado'],
                                ['value' => 'Injerto Óseo en Chip', 'label' => 'Injerto Óseo en Chip'],
                                ['value' => 'Injerto Óseo Estructural de Cabeza de Fémur', 'label' => 'Injerto Óseo Estructural de Cabeza de Fémur'],
                                ['value' => 'Pila de Monedas', 'label' => 'Pila de Monedas'],
                                ['value' => 'Médula Ósea', 'label' => 'Médula Ósea'],
                                ['value' => 'OtrosAporte', 'label' => 'Otros']
                            ]" />
                        <div id="tipoAporteBiologicoOtros" class="mt-2">
                            <x-input type="text" label="Especifique otros" identificador="tipoAporteBiologicoOtros" />
                        </div>
                    </div>
                </div>
                <x-textArea label="Comentarios adicionales  (Citoquímico, toma de cultivos, paraclínicos, metálosis, biopsia, geodas)" identificador="comentariosAdicionalesUltimo" />
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" id="prevBtn" class="text-sm/6 font-semibold text-gray-900" style="display:none;" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="nextPrev(1)">Siguiente</button>
            </div>
        </form>
    </div>
    <x-modal></x-modal>
@endsection
