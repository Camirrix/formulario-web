function debounce(func, wait) {
    let timeout;
    return function(...args) {
        const context = this;
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(context, args), wait);
    };
}

document.addEventListener('DOMContentLoaded', function(){
    // Evaluación Score de Harris
    var scoreInput = document.getElementById("scoreHarris");
    var message = document.getElementById("scoreHarrisMessage");
    if(scoreInput && message){
        let updateClassification = debounce(function(){
            var score = Number(scoreInput.value);
            var classification = "";
            if(score < 70){
                classification = "Clasificación: Malo";
            } else if(score < 80) {
                classification = "Clasificación: Regular";
            } else if(score < 90) {
                classification = "Clasificación: Bueno";
            } else {
                classification = "Clasificación: Excelente";
            }
            message.textContent = classification;
        }, 300);

        function addListener(){
            scoreInput.addEventListener('input', updateClassification);
        }
        function removeListener(){
            scoreInput.removeEventListener('input', updateClassification);
        }
        scoreInput.addEventListener('focus', addListener);
        scoreInput.addEventListener('blur', removeListener);
    }

    // Evaluación IMC
    var imcInput = document.getElementById("imc");
    var imcMsg = document.getElementById("imcMessage");
    if(imcInput && imcMsg){
        let updateIMC = debounce(function(){
            var imcValue = parseFloat(imcInput.value);
            var classification = "";
            if(isNaN(imcValue)) {
                classification = "";
            } else if(imcValue < 25){
                classification = "Normal";
            } else if(imcValue < 30){
                classification = "Sobrepeso";
            } else if(imcValue < 35){
                classification = "Obesisdad grado I";
            } else if(imcValue < 40){
                classification = "Obesisdad grado II";
            } else{
                classification = "Obesidad grado III";
            }
            imcMsg.textContent = "IMC: " + classification;
        }, 300);

        function addIMCListener(){
            imcInput.addEventListener('input', updateIMC);
        }
        function removeIMCListener(){
            imcInput.removeEventListener('input', updateIMC);
        }
        imcInput.addEventListener('focus', addIMCListener);
        imcInput.addEventListener('blur', removeIMCListener);
    }
});
