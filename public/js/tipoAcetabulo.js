$(document).ready(function() {
    $('input[name="tipoAcetabulo"]').change(function() {
        var value = $(this).val();
        // Lógica basada en slideDown/slideUp con animación secuencial para "Atornillado"
        switch(value) {
            case 'Atornillado':
                $('#tamanoAceContainer').fadeIn(300).removeClass('hidden');
                $('#numTornillosContainer').fadeIn(300).removeClass('hidden');
                $('#medidasTornillosContainer').fadeIn(300).removeClass('hidden');
                $('#cuadranteColocacionContainer').fadeIn(300).removeClass('hidden');
                break;
            case 'NoAtornillado':
                $('#tamanoAceContainer, #numTornillosContainer, #medidasTornillosContainer, #cuadranteColocacionContainer').slideUp(300, function() {
                    $(this).addClass('hidden');
                });
                break;
            default:
                // Alternar visibilidad de todos los contenedores simultáneamente
                $('#tamanoAceContainer, #numTornillosContainer, #medidasTornillosContainer, #cuadranteColocacionContainer').each(function(){
                    if($(this).hasClass('hidden')) {
                        $(this).slideDown(300).removeClass('hidden');
                    } else {
                        $(this).fadeOut(300, function(){
                            $(this).addClass('hidden');
                        });
                    }
                });
        }
    });
});
