document.addEventListener('DOMContentLoaded', function() {
    // Reubica los modales si no son hijos directos de document.body
    const modales = document.querySelectorAll('[id^="default-modal-"]');
    for (const modal of modales) {
        if (modal.parentNode !== document.body) {
            document.body.appendChild(modal);
        }
    }

    // Asigna event listeners individualmente para cada botón
    const botones = document.querySelectorAll('[data-modal-toggle]');
    for (const boton of botones) {
        boton.addEventListener('click', function() {
            const targetId = boton.getAttribute('data-modal-toggle');
            const modal = document.getElementById(targetId);
            if (modal) {
                modal.classList.toggle('hidden');
            }
        });
    }
});
