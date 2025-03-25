$(document).ready(function() {
    // Ocultar los contenedores al inicio
    $('#numUnidadesSangreContainer, #tipoFracturaContainer, #tratamientoContainer, #praposkyTipoFemurContainer, #praposkyTipoAcetabuloContainer, #tipoAporteBiologicoContainer').addClass('hidden');

    // Función helper para mostrar/ocultar un elemento y opcionalmente reiniciar un input
    function toggleFade(selector, show, resetSelector) {
        if(show) {
            $(selector).fadeIn('300').removeClass('hidden');
        } else {
            $(selector).fadeOut('300', function(){
                $(this).addClass('hidden');
            });
            if(resetSelector) {
                $(resetSelector).prop('checked', false);
            }
        }
    }

    // Necesidad de Sangre
    $('input[name="necesidadSangre"]').change(function() {
        toggleFade('#numUnidadesSangreContainer', $(this).val() === 'Si', 'input[name="numUnidadesSangre"]');
    });

    // Tipo de Acetábulo (modificada y optimizada)
    $('input[name="tipoAcetabulo"]').change(function() {
        var show = $(this).val() === 'Atornillado';
        toggleFade('#tamanoAceContainer', show);
        toggleFade('#numTornillosContainer', show);
    });

    // Fracturas Intraoperatorias
    $('input[name="fracturasIntraoperatorias"]').change(function() {
        var show = $(this).val() === 'Si';
        toggleFade('#tipoFracturaContainer', show);
        toggleFade('#tratamientoContainer', show);
    });

    // Fémur
    $('input[name="femur"]').change(function() {
        toggleFade('#praposkyTipoFemurContainer', $(this).val() === 'Si', 'input[name="praposkyTipoFemur"]');
    });

    // Defectos óseos acetábulo
    $('input[name="defectosOseosAce"]').change(function() {
        toggleFade('#praposkyTipoAcetabuloContainer', $(this).val() === 'Si', 'input[name="praposkyTipoAcetabulo"]');
    });

    // Aportes biológicos
    $('input[name="aporteBiologico"]').change(function() {
        toggleFade('#tipoAporteBiologicoContainer', $(this).val() === 'Si', 'input[name="tipoAporteBiologico"]');
    });

    // Opciones de Autoinjerto con Perone
    var autoCheckboxPerone = document.getElementById("AutoinjertoPerone");
    if(autoCheckboxPerone){
        autoCheckboxPerone.addEventListener("click", toggleAutoinjertoOptions);
        autoCheckboxPerone.addEventListener("change", toggleAutoinjertoOptions);
        toggleAutoinjertoOptions();
    }
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

    // Opciones de Autoinjerto (alternativo)
    var autoCheckbox = document.getElementById("Autoinjerto");
    if(autoCheckbox){
        autoCheckbox.addEventListener("click", toggleAutoinjertoOptions);
        autoCheckbox.addEventListener("change", toggleAutoinjertoOptions);
        toggleAutoinjertoOptions();
    }

    // Mostrar/Ocultar "Especifique Otros" en aportes biológicos con autoinjerto
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

    // Diagnóstico: combinar mostrar/ocultar contenedores según opción seleccionada
    $('#diagnostico').change(function() {
        var val = $(this).val();
        toggleFade('#tonnisOsteoContainer', val === 'Osteoartrosis');
        toggleFade('#otrosDiagnosticoContainer', val === 'Otros');
    }).trigger('change');

});
