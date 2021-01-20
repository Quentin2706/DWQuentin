// je récupere les inputs et les boutons par tagname pas besoin d'id ou autre.
var inputs = document.getElementsByTagName("input");
// var calculer = document.getElementById("calculer");
// var newCalcul = document.getElementById("newCalcul");
var buttons = document.getElementsByTagName("button");


// ici je pose des events listener sur les boutons
buttons[0].addEventListener("click", check);
buttons[1].addEventListener("click", function (){
    for (let i = 0; inputs.length - 2; i++) {
        inputs[i].value = "";
    }
})
// je pose un event listener sur tous les inputs au début pour etre tranquille enfin je pose sur seulement les 3 premiers
for (let i = 0; i<inputs.length - 2; i++) {
    inputs[i].addEventListener("input", check);
}


// je lance la fonction qu va check si l'input n'est pas vide pour vérifier sa validité SI c'est le cas je lance le calcul sinon je fais apparaitre le message "FORMAT INVALIDE"
function check(e) {
    if (e.target.value != "") {  // si l'input qui est la target devient vide apres avoir été rempli, j'enleve le résultat des calculs
        if (e.target.checkValidity()) { // je vérifie si l'input targeté est valide grace aux pattern posé dans l'HTML
            e.target.parentNode.nextElementSibling.nextElementSibling.style.visibility = "hidden";
            goCalcul();
        } else {
            e.target.parentNode.nextElementSibling.nextElementSibling.style.visibility = "unset";
            inputs[3].value = "";
            inputs[4].value ="";
        }
    } else {
        inputs[3].value = "";
        inputs[4].value ="";
    }
}
// le calcul va vérifier si tous les champs sont remplis et lancer le calcul et afficher les résultats si c'est le cas
function goCalcul()
{
    if (inputs[0].value !="" && inputs[1].value !="" && inputs[2].value !="")
    {
        var mensualite = (parseInt(inputs[0].value)*((parseInt(inputs[1].value)/100)/12)) / (1 - Math.pow(1+((parseInt(inputs[1].value)/100)/12), - (parseInt(inputs[2].value)*12)))

        inputs[3].value = mensualite.toFixed(2);
        inputs[4].value = (mensualite*12*parseInt(inputs[2].value)).toFixed(2);
    } else {
        inputs[3].value = "";
        inputs[4].value ="";
    }
}

