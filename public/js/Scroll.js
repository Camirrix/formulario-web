$(document).on('click', '#multiStepForm button#prevBtn, #multiStepForm button#nextBtn', function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
    return false;
});
