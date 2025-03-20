$(document).ready(function() {
    // Ocultar los contenedores al inicio
    $('#numUnidadesSangreContainer').addClass('hidden');
    $('#tipoFracturaContainer').addClass('hidden');
    $('#tratamientoContainer').addClass('hidden');
    $('#praposkyTipoFemurContainer').addClass('hidden');
    $('#praposkyTipoAcetabuloContainer').addClass('hidden');
    $('#tipoAporteBiologicoContainer').addClass('hidden');

    // Función para mostrar/ocultar el contenedor de numero de unidades de sangre
    $('input[name="necesidadSangre"]').change(function() {
        if ($(this).val() === 'Si') {
            $('#numUnidadesSangreContainer').fadeIn('300');
        } else {
            $('#numUnidadesSangreContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
            $('input[name="numUnidadesSangre"]').prop('checked', false);
        }
    });

    $('input[name="fracturasIntraoperatorias"]').change(function() {
        if ($(this).val() === 'Si') {
            $('#tipoFracturaContainer').fadeIn('300');
            $('#tratamientoContainer').fadeIn('300');
        } else {
            $('#tipoFracturaContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
            $('#tratamientoContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
        }
    });

    // Función para mostrar/ocultar el contenedor de Fémur
    $('input[name="femur"]').change(function() {
        if ($(this).val() === 'Si') {
            $('#praposkyTipoFemurContainer').fadeIn('300');
        } else {
            $('#praposkyTipoFemurContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
            $('input[name="praposkyTipoFemur"]').prop('checked', false);
        }
    });

    // Función para mostrar/ocultar el contenedor de Defectos óseos acetábulo
    $('input[name="defectosOseosAce"]').change(function() {
        if ($(this).val() === 'Si') {
            $('#praposkyTipoAcetabuloContainer').fadeIn('300');
        } else {
            $('#praposkyTipoAcetabuloContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
            $('input[name="praposkyTipoAcetabulo"]').prop('checked', false);
        }
    });

    // Función para mostrar/ocultar el contenedor de aportes biológicos
    $('input[name="aporteBiologico"]').change(function() {
        if ($(this).val() === 'Si') {
            $('#tipoAporteBiologicoContainer').fadeIn('300');
        } else {
            $('#tipoAporteBiologicoContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
            $('input[name="tipoAporteBiologico"]').prop('checked', false);
        }
    });

    // Opciones de Autoinjerto
    var autoCheckbox = document.getElementById("AutoinjertoPerone");
    if(autoCheckbox){
        autoCheckbox.addEventListener("click", toggleAutoinjertoOptions);
        autoCheckbox.addEventListener("change", toggleAutoinjertoOptions);
        toggleAutoinjertoOptions();
    }

    // Función para mostrar/ocultar el contenedor de aportes biológicos
    function toggleAutoinjertoOptions(){
        var autoCheckbox = document.getElementById("AutoinjertoPerone");
        if(!autoCheckbox) return;
        var optionIds = ["Vascularizado", "NoVascularizado"];
        optionIds.forEach(function(id) {
            var input = document.getElementById(id);
            if(input){
                var parentDiv = input.closest("div");
                if(autoCheckbox.checked){
                    parentDiv.classList.remove("hidden");
                } else {
                    parentDiv.classList.add("hidden");
                }
            }
        });
    }
    document.addEventListener("DOMContentLoaded", function(){

    });

    // Opciones de Autoinjerto
    var autoCheckbox = document.getElementById("Autoinjerto");
    if(autoCheckbox){
        autoCheckbox.addEventListener("click", toggleAutoinjertoOptions);
        autoCheckbox.addEventListener("change", toggleAutoinjertoOptions);
        toggleAutoinjertoOptions();
    }

    // Función para mostrar/ocultar el campo "Especifique Otros" en aportes biológicos utilizando estilo de autoinjerto
    function toggleOtrosOptions(){
        var otrosCheckbox = document.getElementById("OtrosAporte");
        if(!otrosCheckbox) return;
        var otrosDiv = document.getElementById("tipoAporteBiologicoOtros");
        if(otrosCheckbox.checked){
            otrosDiv.classList.remove("hidden");
        } else {
            otrosDiv.classList.add("hidden");
        }
    }
    var otrosCheckbox = document.getElementById("OtrosAporte");
    if(otrosCheckbox){
        otrosCheckbox.addEventListener("change", toggleOtrosOptions);
        otrosCheckbox.addEventListener("click", toggleOtrosOptions);
        toggleOtrosOptions();
    }

    // Mostrar/ocultar tonnisOsteoContainer según la opción seleccionada en "diagnostico"
    $('#diagnostico').change(function() {
        if ($(this).val() === 'Osteoartrosis') {
            $('#tonnisOsteoContainer').fadeIn('300').removeClass('hidden');
        } else {
            $('#tonnisOsteoContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
        }
    }).trigger('change');

    $('#diagnostico').change(function() {
        if ($(this).val() === 'Otros') {
            $('#otrosDiagnosticoContainer').fadeIn('300').removeClass('hidden');
        } else {
            $('#otrosDiagnosticoContainer').fadeOut('300', function() {
                $(this).addClass('hidden');
            });
        }
    }).trigger('change');

});
