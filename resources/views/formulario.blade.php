<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gradient-to-b from-green-500 to-blue-400 text-gray-800 p-5">
    <div id="div_base" class="flex flex-col items-center justify-center p-5 bg-white rounded-lg shadow-lg max-w-4xl mx-auto">
        <div class="container">
            <div class="flex justify-between items-center mb-4">
                <img src="path/to/logo1.jpg" alt="Logo de la Clínica 1" class="w-24 h-auto">
                <img src="path/to/logo2.jpg" alt="Logo de la Clínica 2" class="w-24 h-auto">
            </div>
            <h1 class="text-3xl font-bold mb-5">Formulario de Paciente</h1>

            <form id="multiStepForm">
                <div class="step" id="step1">
                    <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5 text-center">Parte 1: Paciente</h2>
                    <div class="form-group mb-4">
                        <label for="historia" class="block mb-1 font-bold">Número de Historia:</label>
                        <input type="text" id="historia" name="historia" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="nombres" class="block mb-1 font-bold">Nombres y Apellidos:</label>
                        <input type="text" id="nombres" name="nombres" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="fechaCirugia" class="block mb-1 font-bold">Fecha Cirugía:</label>
                        <input type="date" id="fechaCirugia" name="fechaCirugia" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="fechaCadera" class="block mb-1 font-bold">Cadera:</label>
                        <input type="text" id="fechaCadera" name="fechaCadera" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="edad" class="block mb-1 font-bold">Edad:</label>
                        <input type="text" id="edad" name="edad" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="clinicaHospital" class="block mb-1 font-bold">Clínica/Hospital:</label>
                        <input type="text" id="clinicaHospital" name="clinicaHospital" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="cirugiaPrevia" class="block mb-1 font-bold">Cirugía de Cadera previa:</label>
                        <input type="text" id="cirugiaPrevia" name="cirugiaPrevia" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="telefono" class="block mb-1 font-bold">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="direccion" class="block mb-1 font-bold">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="diagnostico" class="block mb-1 font-bold">Diagnóstico:</label>
                        <div id="diagnostico" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="osteoartrosis" name="diagnostico" value="Osteoartrosis" class="mr-2">
                                <label for="osteoartrosis">Osteoartrosis</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="artritisReumatoide" name="diagnostico" value="Artritis Reumatoide" class="mr-2">
                                <label for="artritisReumatoide">Artritis Reumatoide</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="necrosisAvascular" name="diagnostico" value="Necrosis Avascular de cabeza femoral" class="mr-2">
                                <label for="necrosisAvascular">Necrosis Avascular de cabeza femoral</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="displasiaCadera" name="diagnostico" value="Displasia de cadera en desarrollo" class="mr-2">
                                <label for="displasiaCadera">Displasia de cadera en desarrollo</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="tipoCirugia" class="block mb-1 font-bold">Tipo de Cirugía:</label>
                        <div id="tipoCirugia" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="primaria" name="tipoCirugia" value="Primaria" class="mr-2">
                                <label for="primaria">Primaria</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="revision" name="tipoCirugia" value="Revisión" class="mr-2">
                                <label for="revision">Revisión</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="scoreHarris" class="block mb-1 font-bold">Score de Harris:</label>
                        <input type="text" id="scoreHarris" name="scoreHarris" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="peso" class="block mb-1 font-bold">Peso:</label>
                        <input type="text" id="peso" name="peso" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="talla" class="block mb-1 font-bold">Talla:</label>
                        <input type="text" id="talla" name="talla" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="imc" class="block mb-1 font-bold">Índice de Masa Corporal:</label>
                        <input type="text" id="imc" name="imc" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="comorbilidades" class="block mb-1 font-bold">Comorbilidades:</label>
                        <textarea id="comorbilidades" name="comorbilidades" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700 h-24 resize-vertical"></textarea>
                    </div>
                    <div class="border-gray-900/10 pb-12">
                        <x-textArea about="Comentarios Adicionales" inputName="comentarioAdicionales"/>
                    </div>
                </div>







                <div class="step" id="step2" style="display:none;">
                    <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5 text-center">Parte 2: Componentes Protesicos</h2>
                    <div class="form-group mb-4">
                        <label for="tipoAcetabulo" class="block mb-1 font-bold">Acetábulo/Tipo:</label>
                        <input type="text" id="tipoAcetabulo" name="tipoAcetabulo" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="tamanoAcetabulo" class="block mb-1 font-bold">Tamaño:</label>
                        <input type="text" id="tamanoAcetabulo" name="tamanoAcetabulo" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="tamanoLiner" class="block mb-1 font-bold">Tamaño Liner de Polietileno:</label>
                        <input type="text" id="tamanoLiner" name="tamanoLiner" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="opcionesLiner" class="block mb-1 font-bold">Opciones de Liner:</label>
                        <div id="opcionesLiner" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="oxinium" name="opcionesLiner" value="Oxinium" class="mr-2">
                                <label for="oxinium">Oxinium</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="ceramico" name="opcionesLiner" value="Cerámico" class="mr-2">
                                <label for="ceramico">Cerámico</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="metal" name="opcionesLiner" value="Metal" class="mr-2">
                                <label for="metal">Metal</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="nubio" name="opcionesLiner" value="Nubio" class="mr-2">
                                <label for="nubio">Nubio</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="otro" name="opcionesLiner" value="Otro" class="mr-2">
                                <label for="otro">Otro</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="cementado" class="block mb-1 font-bold">Cementado:</label>
                        <div id="cementado" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="cementadoSi" name="cementado" value="Sí" class="mr-2">
                                <label for="cementadoSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="cementadoNo" name="cementado" value="No" class="mr-2">
                                <label for="cementadoNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="numTornillos" class="block mb-1 font-bold">Número de Tornillos Acetabulares:</label>
                        <input type="text" id="numTornillos" name="numTornillos" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="medidasTornillos" class="block mb-1 font-bold">Medidas de Tornillos Acetabulares:</label>
                        <input type="text" id="medidasTornillos" name="medidasTornillos" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="tipoFemur" class="block mb-1 font-bold">Fémur/Tipo:</label>
                        <input type="text" id="tipoFemur" name="tipoFemur" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="medidasTallo" class="block mb-1 font-bold">Medidas de Tallo:</label>
                        <input type="text" id="medidasTallo" name="medidasTallo" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Cuello" class="block mb-1 font-bold">Cuello:</label>
                        <input type="text" id="Cuello" name="Cuello" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Cabeza" class="block mb-1 font-bold">Cabeza:</label>
                        <input type="text" id="Cabeza" name="Cabeza" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Cono" class="block mb-1 font-bold">Cono:</label>
                        <input type="text" id="Cono" name="Cono" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="comentariosAdicionales" class="block mb-1 font-bold">Comentarios Adicionales:</label>
                        <textarea id="comentariosAdicionales" name="comentariosAdicionales" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700 h-24 resize-vertical"></textarea>
                    </div>
                </div>
                <div class="step" id="step3" style="display:none;">
                    <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5 text-center">Parte 3: Otros</h2>
                    <div class="form-group mb-4">
                        <label for="duracionCirugia" class="block mb-1 font-bold">Duración de Cirugía (minutos):</label>
                        <input type="text" id="duracionCirugia" name="duracionCirugia" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="cirujano" class="block mb-1 font-bold">Cirujano:</label>
                        <input type="text" id="cirujano" name="cirujano" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="primerAyudante" class="block mb-1 font-bold">1er Ayudante:</label>
                        <input type="text" id="primerAyudante" name="primerAyudante" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="segundoAyudante" class="block mb-1 font-bold">Segundo Ayudante:</label>
                        <input type="text" id="segundoAyudante" name="segundoAyudante" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="hemoglobinaPreop" class="block mb-1 font-bold">Hemoglobina Preoperatoria:</label>
                        <input type="text" id="hemoglobinaPreop" name="hemoglobinaPreop" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="hemoglobinaPostop" class="block mb-1 font-bold">Hemoglobina Postoperatoria:</label>
                        <input type="text" id="hemoglobinaPostop" name="hemoglobinaPostop" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="perdidasHematicas" class="block mb-1 font-bold">Pérdidas Hemáticas:</label>
                        <input type="text" id="perdidasHematicas" name="perdidasHematicas" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="anestesiologo" class="block mb-1 font-bold">Anestesiólogo:</label>
                        <input type="text" id="anestesiologo" name="anestesiologo" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="tipoAnestesia" class="block mb-1 font-bold">Tipo de Anestesia:</label>
                        <input type="text" id="tipoAnestesia" name="tipoAnestesia" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="abordaje" class="block mb-1 font-bold">Abordaje:</label>
                        <input type="text" id="abordaje" name="abordaje" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="necesidadSangre" class="block mb-1 font-bold">Necesidad de Sangre (Sí/No):</label>
                        <div id="necesidadSangre" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="sangreSi" name="necesidadSangre" value="Sí" class="mr-2">
                                <label for="sangreSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="sangreNo" name="necesidadSangre" value="No" class="mr-2">
                                <label for="sangreNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="numUnidadesSangre" class="block mb-1 font-bold">Número de Unidades de Sangre:</label>
                        <input type="text" id="numUnidadesSangre" name="numUnidadesSangre" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                </div>
                <div class="step" id="step4" style="display:none;">
                    <h2 class="text-blue-700 border-b-2 border-blue-700 pb-2 mb-5 text-center">Parte 4: Complicaciones</h2>
                    <div class="form-group mb-4">
                        <label for="fracturasIntraoperatorias" class="block mb-1 font-bold">Fracturas Intraoperatorias (Sí/No):</label>
                        <div id="fracturasIntraoperatorias" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="fracturasSi" name="fracturasIntraoperatorias" value="Sí" class="mr-2">
                                <label for="fracturasSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="fracturasNo" name="fracturasIntraoperatorias" value="No" class="mr-2">
                                <label for="fracturasNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="tipoFractura" class="block mb-1 font-bold">Tipo de fractura (Vancouver):</label>
                        <input type="text" id="tipoFractura" name="tipoFractura" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="tratamiento" class="block mb-1 font-bold">Tratamiento:</label>
                        <input type="text" id="tratamiento" name="tratamiento" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="otrasComplicaciones" class="block mb-1 font-bold">Otras Complicaciones:</label>
                        <textarea id="otrasComplicaciones" name="otrasComplicaciones" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700 h-24 resize-vertical"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="defectosOseos" class="block mb-1 font-bold">Defectos Óseos:</label>
                        <input type="text" id="defectosOseos" name="defectosOseos" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="femur" class="block mb-1 font-bold">Fémur:</label>
                        <div id="femur" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="femurSi" name="femur" value="Sí" class="mr-2">
                                <label for="femurSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="femurNo" name="femur" value="No" class="mr-2">
                                <label for="femurNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="praposkyTipoFemur" class="block mb-1 font-bold">Praposky Tipo:</label>
                        <input type="text" id="praposkyTipoFemur" name="praposkyTipoFemur" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="defectosOseosAcetabulo" class="block mb-1 font-bold">Defectos Óseos Acetábulo:</label>
                        <div id="defectosOseosAcetabulo" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="acetabuloSi" name="defectosOseosAcetabulo" value="Sí" class="mr-2">
                                <label for="acetabuloSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="acetabuloNo" name="defectosOseosAcetabulo" value="No" class="mr-2">
                                <label for="acetabuloNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="praposkyTipoAcetabulo" class="block mb-1 font-bold">Praposky Tipo:</label>
                        <input type="text" id="praposkyTipoAcetabulo" name="praposkyTipoAcetabulo" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="protrusionAcetabular" class="block mb-1 font-bold">Protrusión Acetabular:</label>
                        <div id="protrusionAcetabular" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="protrusionSi" name="protrusionAcetabular" value="Sí" class="mr-2">
                                <label for="protrusionSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="protrusionNo" name="protrusionAcetabular" value="No" class="mr-2">
                                <label for="protrusionNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="discontinuidadPelvica" class="block mb-1 font-bold">Discontinuidad Pélvica:</label>
                        <div id="discontinuidadPelvica" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="discontinuidadSi" name="discontinuidadPelvica" value="Sí" class="mr-2">
                                <label for="discontinuidadSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="discontinuidadNo" name="discontinuidadPelvica" value="No" class="mr-2">
                                <label for="discontinuidadNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="aporteBiologico" class="block mb-1 font-bold">Aporte Biológico:</label>
                        <div id="aporteBiologico" class="flex flex-wrap">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="aporteSi" name="aporteBiologico" value="Sí" class="mr-2">
                                <label for="aporteSi">Sí</label>
                            </div>
                            <div class="flex items-center mb-2 mr-4">
                                <input type="checkbox" id="aporteNo" name="aporteBiologico" value="No" class="mr-2">
                                <label for="aporteNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="forma" class="block mb-1 font-bold">Forma:</label>
                        <input type="text" id="forma" name="forma" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="injertoOseoChip" class="block mb-1 font-bold">Injerto Óseo en Chip:</label>
                        <input type="text" id="injertoOseoChip" name="injertoOseoChip" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="pilaMonedas" class="block mb-1 font-bold">Pila de Monedas:</label>
                        <input type="text" id="pilaMonedas" name="pilaMonedas" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="injertoOseoEstructural" class="block mb-1 font-bold">Injerto Óseo Estructural de Cabeza de Fémur:</label>
                        <input type="text" id="injertoOseoEstructural" name="injertoOseoEstructural" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="medulaOsea" class="block mb-1 font-bold">Médula Ósea:</label>
                        <input type="text" id="medulaOsea" name="medulaOsea" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                    <div class="form-group mb-4">
                        <label for="otros" class="block mb-1 font-bold">Otros:</label>
                        <input type="text" id="otros" name="otros" class="w-full p-2 border border-gray-300 rounded focus:border-blue-700">
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" id="prevBtn" class="text-sm/6 font-semibold text-gray-900" style="display:none;" onclick="nextPrev(-1)">Anterior</button>
                    <button type="button" id="nextBtn" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" onclick="nextPrev(1)">Siguiente</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let currentStep = 0;
        showStep(currentStep);

        function showStep(n) {
            let steps = document.getElementsByClassName("step");
            steps[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (steps.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Enviar";
            } else {
                document.getElementById("nextBtn").innerHTML = "Siguiente";
            }
        }

        function nextPrev(n) {
            let steps = document.getElementsByClassName("step");
            steps[currentStep].style.display = "none";
            currentStep = currentStep + n;
            if (currentStep >= steps.length) {
                document.getElementById("multiStepForm").submit();
                return false;
            }
            showStep(currentStep);
        }
    </script>
</body>
</html>
