var nbj = confirm("Jouer tout seul ?");
var plages = document.getElementsByClassName("recto");
var img = document.getElementsByClassName("verso");
var nbrcp = document.getElementById("nbrcp");
var chrono = document.getElementById("timer");
var recom = document.getElementById("restart");
var solution = document.getElementById("soluce");
var cptPair = document.getElementById("paire");
var tour = document.getElementById("joueur");
var prj1div = document.getElementById("prj1div");
var prj2div = document.getElementById("prj2div");
if (nbj == true) {
    prj1div.style.display = "none";
    prj2div.style.display = "none";
}
if (nbj == false) {
    do {
        var j1 = prompt("Entrez le pseudo du joueur 1");
    } while (j1 == "")
    do {
        var j2 = prompt("Entrez le pseudo du joueur 2");
    } while (j2 == "")
}
var debug = true;
var jeu = 1;
var drapo = true;
var cpt = 0;
var tab = [];
var versoTemp = [];
var rectoTemp = [];
var min = 0;
var sec = 0;
var secTemp = 0;
var compteCarte = 0;
if (nbj == false) {
    var prj1 = 0;
    var prj2 = 0;
}

/***************************Fonctions********************************/
/***Retourner les cartes***/
function retourne(bool, verso, e) {
    if (bool == true) {
        e.target.style.display = "none";
        verso.style.display = "flex";
        tab.push(verso.getAttribute("src"))
    }
    else {
        rectoTemp[0].style.display = "flex";
        rectoTemp[1].style.display = "flex";
        versoTemp[0].style.display = "none";
        versoTemp[1].style.display = "none";

        tab = [];
        rectoTemp = [];
        versoTemp = [];
        debug = true;
    }
}
/***Timer***/
function timer() {
    sec++;
    if (sec >= 60) {
        if (secTemp != 0 && sec > 55) {
            secTemp = sec - secTemp;
            sec = secTemp;
            min++;
            secTemp = 0;
        } else {
            sec = 0;
            min++;
            secTemp = 0
        }
    }
    if (min < 10) {
        time = "0" + min;
    }
    else {
        time = min;
    }
    if (sec < 10) {
        time += ":0" + sec
    }
    else {
        time += ":" + sec
    }
    chrono.innerHTML = time;
    horloge = setTimeout("timer()", 1000);
}

/***********************Evenements*********************/
/***Restart***/
recom.addEventListener("click", function () {
    document.location.reload();
})

/***Solution***/
solution.addEventListener("click", function () {
    for (let i = 0; i < plages.length; i++) {
        plages[i].style.display = "none";
        img[i].style.display = "flex";
    }
    clearTimeout(horloge);
})
if (nbj == false) {
    tour.innerHTML = j1 + ",A toi de jouer.";
    while (j1 == null) {
        j1 = prompt("Entrez le pseudo du joueur 1");
    }
    while (j2 == null) {
        j2 = prompt("Entrez le pseudo du joueur 2");
    }
}

/***Jeu***/
for (let i in plages) {
    plages[i].addEventListener("click", (e) => {
        if (drapo == true) {
            drapo = false;
            timer();
        }
        if (debug == true) {
            cpt++;
            nbrcp.innerHTML = "Nombre de coups :" + cpt;
            verso = e.target.parentNode.getElementsByClassName("verso")[0];
            versoTemp.push(verso);
            rectoTemp.push(e.target);
            if (tab.length < 2) {
                retourne(true, verso, e);
            }
            if (tab.length == 2) {
                if (tab[0] == tab[1]) {
                    console.log("oui");
                    tab = [];
                    versoTemp = [];
                    rectoTemp = [];
                    compteCarte++;
                    if (nbj == false) {
                        if (jeu % 2 != 0) {
                            prj1++;
                        } else {
                            prj2++;
                        }
                    }

                    if (compteCarte == 1) {
                        cptPair.innerHTML = compteCarte + " paire trouvée"
                    }
                    else {
                        cptPair.innerHTML = compteCarte + " paires trouvées"
                    }
                    if (compteCarte == 8) {
                        if (nbj == false) {
                            if (prj1 < prj2) {
                                alert(j1 + " a gagné !");
                            } else if (prj1 == prj2) {
                                alert("Personne n'a gagné.");
                            } else {
                                alert(j2 + " a gagné !");
                            }
                        } else {
                            alert("Vous avez gagné ! ");
                        }
                        clearTimeout(horloge);
                    }
                } else {
                    debug = false;
                    time = setTimeout(retourne, 1000, false, verso, e);
                    jeu++;
                    if (nbj == false) {
                        if (jeu % 2 != 0) {
                            tour.innerHTML = j1 + ", A toi de jouer.";
                        } else {
                            tour.innerHTML = j2 + ", A toi de jouer.";
                        }
                    }
                }
                if (nbj == false) {
                    prj1 <= 1 ? prj1div.innerHTML = j1 + " a trouvé " + prj1 + " paire." : prj1div.innerHTML = j1 + " a trouvé " + prj1 + " paires.";
                    prj2 <= 1 ? prj2div.innerHTML = j2 + " a trouvé " + prj2 + " paire." : prj2div.innerHTML = j2 + " a trouvé " + prj2 + " paires.";
                }
            }
        }
    });

}
