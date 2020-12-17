var affichage = document.getElementById("affichage");
var lesboutons = document.querySelectorAll(".bouton");

for (let i in lesboutons) {
    lesboutons[i].addEventListener("click", (e) => {
        if (lesboutons[i].getAttribute("value") == "=") {
            resultF = parseInt(affichage.innerHTML);
            console.log(resultF);
            if (op == "+") {
                affichage.innerHTML = resultat + resultF;
            } else if (op == "-") {
                affichage.innerHTML = resultat - resultF;
            } else if (op == "*") {
                affichage.innerHTML = resultat * resultF;
            } else if (op == "/") {
                affichage.innerHTML = resultat / resultF;
            }
            console.log(resultat);
            affichage.innerHTML = resultat + resultF;
            delete op;
            delete resultat;
        } else if (lesboutons[i].getAttribute("value") == "c") {
            affichage.innerHTML = "";
            delete op;
            delete resultat;
        } else if (lesboutons[i].getAttribute("value") == "+") {
            if (typeof (resultat) == "undefined") {
                resultat = parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
            } else {
                resultat += parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
            }
            op = "+";
        } else if (lesboutons[i].getAttribute("value") == "-") {
            if (typeof (resultat) == "undefined") {
                resultat = parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
            } else {
                resultat -= parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
            }
            op = "-";
        } else if (lesboutons[i].getAttribute("value") == "/") {
            if (typeof (resultat) == "undefined") {
                resultat = parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
                op = "/";
            } else {
                resultat /= parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
                op = "/";
            }
        } else if (lesboutons[i].getAttribute("value") == "*") {
            if (typeof (resultat) == "undefined") {
                resultat = parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
                op = "*";
            } else {
                resultat *= parseInt(affichage.innerHTML);
                affichage.innerHTML = "";
                console.log(resultat);
                op = "*";
            }
        } else {
            var t = e.target.innerHTML;
            affichage.innerHTML += t;
        }
    })
}