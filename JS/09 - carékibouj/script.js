carre = document.getElementById("carre");
haut = document.getElementById("h");
bas = document.getElementById("b");
gauche = document.getElementById("g");
droite = document.getElementById("d");
var pas = 10;

haut.addEventListener("mousedown", function () {
    var top = getComputedStyle(carre).top;
    top = parseInt(top.substring(0, top.indexOf("p")));
    var mouv = top - pas + "px";
    carre.style.top = mouv;

})

bas.addEventListener("mousedown", function () {
    var top = getComputedStyle(carre).top;
    top = parseInt(top.substring(0, top.indexOf("p")));
    var mouv = top + pas + "px";
    carre.style.top = mouv;

})

gauche.addEventListener("mousedown", function () {
    var left = getComputedStyle(carre).left;
    left = parseInt(left.substring(0, left.indexOf("p")));
    var mouv = left - pas + "px";
    carre.style.left = mouv;

})

droite.addEventListener("mousedown", function () {
    var left = getComputedStyle(carre).left;
    left = parseInt(left.substring(0, left.indexOf("p")));
    var mouv = left + pas + "px";
    carre.style.left = mouv;

})

document.addEventListener("keydown", (e) => {
    if (e.key == "z") {
        var top = getComputedStyle(carre).top;
        top = parseInt(top.substring(0, top.indexOf("p")));
        var mouv = top - pas + "px";
        carre.style.top = mouv;
    }
    if (e.key == "q") {
        var left = getComputedStyle(carre).left;
        left = parseInt(left.substring(0, left.indexOf("p")));
        var mouv = left - pas + "px";
        carre.style.left = mouv;
    }
    if (e.key == "d") {
        var left = getComputedStyle(carre).left;
        left = parseInt(left.substring(0, left.indexOf("p")));
        var mouv = left + pas + "px";
        carre.style.left = mouv;
    }
    if (e.key == "s") {
        var top = getComputedStyle(carre).top;
        top = parseInt(top.substring(0, top.indexOf("p")));
        var mouv = top + pas + "px";
        carre.style.top = mouv;
    }
});