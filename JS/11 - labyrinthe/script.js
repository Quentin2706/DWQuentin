// Carré avec deplacement bouton et touches ZQSD
var carre = document.getElementById("carre");
var obstacles = document.getElementsByClassName("obstacles");
var haut = document.getElementById("h");
var bas = document.getElementById("b");
var gauche = document.getElementById("g");
var droite = document.getElementById("d");
var pas = 10;


function deplace(dLeft, dTop) {
    let temp = window.getComputedStyle(carre);
    let mouvLeft = parseInt(temp.left) + dLeft + "px";
    let mouvTop = parseInt(temp.top) + dTop + "px";
    carre.style.left = mouvLeft;
    carre.style.top = mouvTop;
}

var flagtime = false;
var gg = false;
document.addEventListener("keydown", (e) => {
    if (flagtime == false) {
        timer();
        flagtime = true;
    }
    var temp = e.key;
    var flagcheat = false;
    if (temp == "Control") {
        document.addEventListener("keydown", (e) => {
            var temp2 = e.key;
            var active = "";
            cheatOnOff(temp2, active);
        });
    }
    var flag = false;
    var fin = document.getElementById("fin");
    var fininfo = { x: fin.offsetLeft, y: fin.offsetTop, width: fin.offsetWidth, height: fin.offsetHeight }
    switch (temp) {
        case "z":
            {
                var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                if (flagcheat == false) {
                    var i = 0;
                    while (i < obstacles.length && flag == false) {
                        var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                        if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                            carreinfo.x + carreinfo.width > obstacleinfo.x && // coté droit
                            carreinfo.y - pas < obstacleinfo.y + obstacleinfo.height && // Coté haut
                            carreinfo.height + carreinfo.y > obstacleinfo.y) {  // coté bas
                            // collision détectée !
                            console.log("Touché !");
                            flag = true;
                        }
                        i++;
                    }
                }
                flag == false ? deplace(0, -pas) : "";
                if (carreinfo.x < fininfo.x + fininfo.width &&  // coté gauche
                    carreinfo.x + carreinfo.width > fininfo.x && // coté droit
                    carreinfo.y - pas < fininfo.y + fininfo.height && // Coté haut
                    carreinfo.height + carreinfo.y > fininfo.y) {
                    alert("gg !");
                    gg = true;
                }
                break;
            }
        case "q":
            {
                var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                if (flagcheat == false) {
                    var i = 0;
                    while (i < obstacles.length && flag == false) {
                        var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                        if (carreinfo.x - pas < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                            carreinfo.x + carreinfo.width > obstacleinfo.x && // coté droit
                            carreinfo.y < obstacleinfo.y + obstacleinfo.height && // Coté haut
                            carreinfo.height + carreinfo.y > obstacleinfo.y) { // coté bas
                            // collision détectée !
                            console.log("Touché !");
                            flag = true;
                        }
                        i++;
                    }
                }
                flag == false ? deplace(-pas, 0) : "";
                if (carreinfo.x < fininfo.x + fininfo.width &&  // coté gauche
                    carreinfo.x + carreinfo.width > fininfo.x && // coté droit
                    carreinfo.y - pas < fininfo.y + fininfo.height && // Coté haut
                    carreinfo.height + carreinfo.y > fininfo.y) {
                    alert("gg !");
                    gg = true;

                }
                break;
            }
        case "s":
            {
                var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                if (flagcheat == false) {
                    var i = 0;
                    while (i < obstacles.length && flag == false) {

                        var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                        if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                            carreinfo.x + carreinfo.width > obstacleinfo.x &&  // coté droit
                            carreinfo.y < obstacleinfo.y + obstacleinfo.height &&   // Coté haut
                            carreinfo.height + pas + carreinfo.y > obstacleinfo.y) {   // coté bas
                            // collision détectée !
                            console.log("Touché !");
                            flag = true;
                        }
                        i++;
                    }
                }
                flag == false ? deplace(0, pas) : "";
                if (carreinfo.x < fininfo.x + fininfo.width &&  // coté gauche
                    carreinfo.x + carreinfo.width > fininfo.x && // coté droit
                    carreinfo.y - pas < fininfo.y + fininfo.height && // Coté haut
                    carreinfo.height + carreinfo.y > fininfo.y) {
                    alert("gg !");
                    gg = true;
                }
                break;
            }
        case "d":
            {
                var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                if (flagcheat == false) {
                    var i = 0;
                    while (i < obstacles.length && flag == false) {

                        var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }

                        if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                            carreinfo.x + pas + carreinfo.width > obstacleinfo.x &&  // coté droit
                            carreinfo.y < obstacleinfo.y + obstacleinfo.height &&  // Coté haut
                            carreinfo.height + carreinfo.y > obstacleinfo.y) {  // coté bas
                            // collision détectée !
                            console.log("Touché !");
                            flag = true;
                        }
                        i++;
                    }
                }
                flag == false ? deplace(pas, 0) : "";
                if (carreinfo.x < fininfo.x + fininfo.width &&  // coté gauche
                    carreinfo.x + carreinfo.width > fininfo.x && // coté droit
                    carreinfo.y - pas < fininfo.y + fininfo.height && // Coté haut
                    carreinfo.height + carreinfo.y > fininfo.y) {
                    alert("gg !");
                    gg = true;
                }
                break;
            }
    }
    gg == true ? clearTimeout(t) : "";
});

function deplaceSouris(e) {
    if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX))
    {
    carre.style.top = parseInt(e.clientY) + ecartY + "px";
    carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

var ecartY, ecartX;

var carre = document.getElementById('carre');
var flagMouv = false;

carre.addEventListener("mousedown", (e) => {
    timer();
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    flagMouv = true;
});

document.addEventListener("mousemove", (e) => {
    if (flagMouv == true) {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) => {
    flagMouv = false;
});


// CHEAT CODE 

function cheatOnOff(temp2, active) {
    if (temp2 == "y") {

        // active = active == true ? false : true;
        if (active == "") {
            var active = true;
            console.log("active ete vide" + active);
        } else {
            active = active == true ? false : true;
            console.log("on est dans le else " + active);
        }
        for (let i = obstacles.length - 1; i >= 0; i--) {  ///Boucle qui marche a moitié donc on la fait a l'envers
            if (active == true) {
                obstacles[i].className = "cheat";
                console.log("Active est true normalement " + active);
            } else {
                obstacles[i].className = "obstacles";
                active = "";
                console.log("Active est false normalement " + active);
            }
            flagcheat = true;
        }
    }
    return active;
}
divtime = document.getElementById("divtime");
var minute = 0;
var second = 0;

function timer() {
    second++;

    if (second == 60) {
        minute++;
        second = 0;
    }
    if (minute < 10) {
        time = "0" + minute;
    } else {
        time = minute;
    }

    if (second < 10) {
        time += " : 0" + second;
    } else {
        time += second;
    }

    divtime.innerHTML = time;
    t = setTimeout("timer()", 1000);
}


//Gestion des collisions
/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'obstacle
 * @param {*} obstacle //obstacle fixe
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        console.log("collision n°" + compteurCollision + "  " + obstacle.id);
        flagMouv = false;
        compteurCollision++;
        return true;
    }
    return false;
}
/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'un des obstacles
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacles');
    //on teste pour chacun des obstacles
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}