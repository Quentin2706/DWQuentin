// Carré avec deplacement bouton et touches ZQSD
var carre = document.getElementById("carre");
var obstacles = document.getElementsByClassName("obstacles");
var haut = document.getElementById("h");
var bas = document.getElementById("b");
var gauche = document.getElementById("g");
var droite = document.getElementById("d");
var pas = 5;


function deplace(dLeft, dTop) {
    let temp = window.getComputedStyle(carre);
    let mouvLeft = parseInt(temp.left) + dLeft + "px";
    let mouvTop = parseInt(temp.top) + dTop + "px";
    carre.style.left = mouvLeft;
    carre.style.top = mouvTop;
}

haut.addEventListener("mousedown", function () { deplace(0, -pas); });
bas.addEventListener("mousedown", function () { deplace(0, pas); });
gauche.addEventListener("mousedown", function () { deplace(-pas, 0); });
droite.addEventListener("mousedown", function () { deplace(pas, 0); });

document.addEventListener("keydown", (e) => {
    var temp = e.key;
    var flag = false;
    switch (temp) {
        case "z":
            {
                for (let i = 0; i < obstacles.length; i++) {
                    var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                    var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                    if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                        carreinfo.x + carreinfo.width > obstacleinfo.x && // coté droit
                        carreinfo.y - pas < obstacleinfo.y + obstacleinfo.height && // Coté haut
                        carreinfo.height + carreinfo.y > obstacleinfo.y) {  // coté bas
                        // collision détectée !
                        console.log("Touché !");
                        flag = true;
                    }
                }
                flag == false ? deplace(0, -pas) : "";
                break;
            }
        case "q":
            {
                for (let i = 0; i < obstacles.length; i++) {
                    var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                    var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                    if (carreinfo.x - pas < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                        carreinfo.x + carreinfo.width > obstacleinfo.x && // coté droit
                        carreinfo.y < obstacleinfo.y + obstacleinfo.height && // Coté haut
                        carreinfo.height + carreinfo.y > obstacleinfo.y) { // coté bas
                        // collision détectée !
                        console.log("Touché !");
                        flag = true;
                    }
                }
                flag == false ? deplace(-pas, 0) : "";
                break;
            }
        case "s":
            {
                for (let i = 0; i < obstacles.length; i++) {
                    var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                    var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
                    if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                        carreinfo.x + carreinfo.width > obstacleinfo.x &&  // coté droit
                        carreinfo.y < obstacleinfo.y + obstacleinfo.height &&   // Coté haut
                        carreinfo.height + pas + carreinfo.y > obstacleinfo.y) {   // coté bas
                        // collision détectée !
                        console.log("Touché !");
                        flag = true;
                    }
                }
                flag == false ? deplace(0, pas) : "";
                break;
            }
        case "d":
            {
                for (let i = 0; i < obstacles.length; i++) {
                    var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
                    var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }

                    if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
                        carreinfo.x + pas + carreinfo.width > obstacleinfo.x &&  // coté droit
                        carreinfo.y < obstacleinfo.y + obstacleinfo.height &&  // Coté haut
                        carreinfo.height + carreinfo.y > obstacleinfo.y) {  // coté bas
                        // collision détectée !
                        console.log("Touché !");
                        flag = true;
                    }
                }
                flag == false ? deplace(pas, 0) : "";
                break;
            }
    }
});


var ecartY, ecartX;

var flagmouv = false;
// carre.addEventListener("mousedown", (e) => {
//     flagmouv = true;
//     ecartY = parseInt( window.getComputedStyle(carre).top)-parseInt(e.clientY)
//     ecartX = parseInt( window.getComputedStyle(carre).left)-parseInt(e.clientX)
// });
// document.addEventListener("mousemove", (e) => {
//     //  var flag = false;
//     if (flagmouv == true) {
//             // for (let i = 0; i < obstacles.length; i++) {
//             //     var carreinfo = { x: carre.offsetLeft, y: carre.offsetTop, width: carre.offsetWidth, height: carre.offsetHeight }
//             //     var obstacleinfo = { x: obstacles[i].offsetLeft, y: obstacles[i].offsetTop, width: obstacles[i].offsetWidth, height: obstacles[i].offsetHeight }
//             //     if (carreinfo.x < obstacleinfo.x + obstacleinfo.width &&  // coté gauche
//             //         carreinfo.x + carreinfo.width > obstacleinfo.x && // coté droit
//             //         carreinfo.y - pas < obstacleinfo.y + obstacleinfo.height && // Coté haut
//             //         carreinfo.height + carreinfo.y > obstacleinfo.y) {  // coté bas
//             //         // collision détectée !
//             //         console.log("Touché !");
//             //         flag = true;
//             //     }
//             // }
//             // if(flag == false)
//             // {
//         carre.style.top = parseInt(e.clientY) + parseInt(ecartY)+ "px";
//         carre.style.left = parseInt(e.clientX) + parseInt(ecartX)+ "px";
//         // }
//     }
// });
// carre.addEventListener("mouseup", (e) => {
//     flagmouv = false;
// });

function deplaceSouris(e)
{
    carre.style.top = parseInt(e.clientY) + ecartY + "px";
    carre.style.left = parseInt(e.clientX) + ecartX + "px";
};

var ecartY, ecartX;

var carre = document.getElementById('carre');
var flagMouv = false;

carre.addEventListener("mousedown", (e)=>
{
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    flagMouv = true;
});

document.addEventListener("mousemove", (e) =>
{
    if(flagMouv == true)
    {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) =>
{
    flagMouv = false;
});