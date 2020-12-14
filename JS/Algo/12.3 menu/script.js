
function compterLettre() {
    var phrase = prompt("Entrez la phrase ");
    var lettre = prompt("Entrez la lettre ");
    var result = 0;
    for (let i = 0; i < phrase.length; i++) {
        if (phrase[i] == lettre) {
            result += 1;
        }
    }
    alert("il y a " + result + " de fois " + lettre);
}


function tableMultiplication() {
    var nb = parseInt(prompt("Entrez le nombre a multiplier "));
    var result = 0;
    for (let i = 0; i <= 10; i++) {
        result = i * nb;
        document.write(i + " x " + nb + " = " + result + "<br>");
    }
}


function sommeMoyenne() {
    var tab = [];
    do {
        var nb = parseInt(prompt("Entrez un nombre et saisissez 0 pour terminer la saisie."));
        let temp = tab.push(nb);
    } while (nb != 0);
    var result = 0;
    var tabLength = tab.length - 1
    for (let i = 0; i < tabLength; i++) {
        result += tab[i];
    }
    document.write("Somme : " + result);
    document.write("moyenne : " + result / tabLength);
}


function nombreVoyelle() {
    var mot = prompt(" Votre mot ");
    mot = mot.toLowerCase();
    var result = 0;
    for (let i = 0; i < mot.length; i++) {
        console.log(mot[i]);
        switch (mot[i]) {
            case "a":
                result += 1;
                break;
            case "e":
                result += 1;
                break;
            case "i":
                result += 1;
                break;
            case "o":
                result += 1;
                break;
            case "u":
                result += 1;
                break;
            case "y":
                result += 1;
                break;
        }
        mot.substr(i + 1);
    }
    document.write("il y a " + result + " voyelles dans le mot.");
}



var choix = parseInt(prompt("tapez 1 pour compter les lettre, 2 pour table multiplication , 3 somme et moyenne, 4 nombre de voyelle"));
switch (choix) {
    case 1:
        compterLettre();
        break;
    case 2:
        tableMultiplication();
        break;
    case 3:
        sommeMoyenne();
        break;
    case 4:
        nombreVoyelle();
        break;
}




