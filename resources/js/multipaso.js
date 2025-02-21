let currentStep = 0;
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
            if (currentStep >= steps.length) {
                document.getElementById("multiStepForm").submit();
                return false;
            }
            showStep(currentStep);
        }
