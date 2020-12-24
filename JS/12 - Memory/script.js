var recto = document.getElementsByClassName("recto");
var clickClickDiv = document.getElementById("clickClickDiv");
var divTime = document.getElementById("divTime");
var solutionButton = document.getElementById("solution");
var reload = document.getElementById("reload");
var nbPaire = document.getElementById("nbPaire");
var bool = true;
var clickClick = 0;
var flagtimer = true;
var compteurcarte=0;
for (let i = 0; i < recto.length; i++) {
    recto[i].addEventListener("click", function (e) {
        if (flagtimer == true) {
            timer();
        }
        clickClick++;
        clickClickDiv.textContent = "Nombre de clique : " + clickClick;
        if (verif.length < 2) {
            reveal(e, true);
        }
        if (verif.length == 2) {
            if (verif[0] == verif[1]) {
                verif = [];
                memorecto = [];
                memoverso = [];
                compteurcarte++;
                if (compteurcarte == 8){
                    alert("Vous avez gagné !");
                    clearTimeout(t);
                }
                nbPaire.innerHTML = "Nombre de paires :"+compteurcarte
            } else {
                timeout = setTimeout(reveal,1000,e,false);
            }
            bool = false;
        }
        console.log(verif);
    });
}


var verif = [];
var memorecto = [];
var memoverso = [];
function reveal(e, bool) {
    var carte = e.target.parentNode.getElementsByClassName("verso")[0];
    if (bool == true) {
        carte.style.display = "flex";
        verif.push(carte.getAttribute("src"));
        e.target.style.display = "none";
        memoverso.push(carte);
        memorecto.push(e.target);
    } else {
        memorecto[0].style.display =  "flex";
        memorecto[1].style.display =  "flex";
        memoverso[0].style.display =  "none";
        memoverso[1].style.display =  "none";
        verif = [];
        memorecto =[];
        memoverso =[];
    }
}

var second = 0;
var minute = 0;
var secondTemp = 0;

function timer() {
    second++;

    if (second >= 60) {
        if(secondTemp != 0 && second> 55)
        { 
        secondTemp=second-5-secondTemp;
        second = secondTemp;
        minute++;
        secondTemp = 0;
        }else {
            second = 0
            minute++;
            secondTemp = 0;
        }
    }
    if (minute < 10) {
        time = "0" + minute + " : ";
    } else {
        time = minute+ " : ";
    }

    if (second < 10) {
        time += "0" + second;
    } else {
        time += second;
    }

    divTime.innerHTML = time;
    t = setTimeout("timer()", 1000);
    flagtimer = false;
}

solutionButton.addEventListener("click", solution);
reload.addEventListener("click", function(){
    document.location.reload();
})
function solution(){
    for (let i = 0; i< recto.length; i++)
    {
        var verso = recto[i].parentNode.getElementsByClassName("verso")[0];
        verso.style.display="flex";
        recto[i].style.display="none";
    }
}
