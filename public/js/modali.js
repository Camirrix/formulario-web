document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los modales que inicien con "default-modal-"
    var modales = document.querySelectorAll('[id^="default-modal-"]');
    modales.forEach(function(modal) {
        if (modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    });

    // Agrega el listener a todos los botones con data-modal-toggle
    document.querySelectorAll('[data-modal-toggle]').forEach(function(button) {
        button.addEventListener('click', function() {
            const targetId = button.getAttribute('data-modal-toggle');
            const modal = document.getElementById(targetId);
            if (modal) {
                modal.classList.toggle('hidden');
            }
        });
    });
});
