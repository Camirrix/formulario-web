document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("default-modal-{{ $identificador }}");
    if(modal && modal.parentNode !== document.body) {
        // Mover el modal fuera de cualquier contenedor con overflow:hidden
        document.body.appendChild(modal);
    }
});
