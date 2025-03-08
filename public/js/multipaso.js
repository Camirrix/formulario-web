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
    // Mostrar "Enviar" en el último paso
    if (n == (steps.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Enviar";
    } else {
        document.getElementById("nextBtn").innerHTML = "Siguiente";
    }
}

function nextPrev(n) {
    let steps = document.getElementsByClassName("step");

    if (n == 1 && currentStep == 3) {
        // Si estamos en el último paso y vamos a avanzar, mostrar el modal
        previousStep = currentStep; // Guarda el paso actual antes de avanzar
        document.getElementById("openModalBtn").click();
        return false; // No avanzar al siguiente paso todavía
    }

    steps[currentStep].style.display = "none";
    currentStep = currentStep + n;

    if (currentStep >= steps.length) {
        currentStep = steps.length - 1;
    }

    showStep(currentStep);
}

// Agregar evento para el botón de confirmación del modal
document.getElementById("confirmSubmitBtn").addEventListener("click", function() {
    document.getElementById("multiStepForm").submit();
});

document.getElementById("cancelSubmitBtn").addEventListener("click", function() {
    // Restaura el paso anterior
    document.getElementsByClassName("step")[currentStep].style.display = "none";
    currentStep = previousStep;
    showStep(currentStep); // Actualiza la visualización
});

