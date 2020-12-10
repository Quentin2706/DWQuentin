
function tableMultiplication() {
    var nb = parseInt(prompt("Entrez le nombre a multiplier "));
    var result = 0;
    for (let i = 0; i <= 10; i++) {
        result = i * nb;
        document.write(i + " x " + nb + " = " + result + "<br>");
    }
}

tableMultiplication();