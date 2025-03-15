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
});

document.addEventListener('DOMContentLoaded', function () {
    // Selecciona todos los checkboxes del radiomulti de aporte biológico
    const checkboxes = document.querySelectorAll('input[name="tipoAporteBiologico[]"]');
    const otrosInputContainer = document.getElementById('tipoAporteBiologicoOtros');

    checkboxes.forEach(function(checkbox){
        checkbox.addEventListener('change', function(){
            // Verifica si el checkbox de opción "Otros" está seleccionado
            const otrosCheckbox = document.querySelector('input[name="tipoAporteBiologico[]"][value="Otros"]');
            if(otrosCheckbox && otrosCheckbox.checked) {
                otrosInputContainer.classList.remove('hidden');
            } else {
                otrosInputContainer.classList.add('hidden');
            }
        });
    });
});
