let currentStep = 0;
let previousStep = 0; // Variable para almacenar el paso anterior
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

    // Verificar si currentStep es mayor o igual a 4
    if (currentStep >= 4) {
        currentStep = 3; // Establecer currentStep en 3 (el cuarto paso)
        // Mostrar el modal de confirmación
        previousStep = currentStep; // Guarda el paso actual antes de avanzar
        document.getElementById("openModalBtn").click();
        return false;
    }

    showStep(currentStep);
}

// Agregar evento para el botón de confirmación del modal
document.getElementById("confirmSubmitBtn").addEventListener("click", function() {
    document.getElementById("multiStepForm").submit();
});

document.getElementById("cancelSubmitBtn").addEventListener("click", function() {
    currentStep = previousStep; // Restaura el paso anterior
    showStep(3); // Actualiza la visualización
});

