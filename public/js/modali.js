document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los modales que inicien con "default-modal-"
    var modales = document.querySelectorAll('[id^="default-modal-"]');
    modales.forEach(function(modal) {
        if (modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    });
});
