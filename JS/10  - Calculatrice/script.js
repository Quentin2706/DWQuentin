// Juste pour le mode Sombre
var mode = document.getElementById("mode");
var body = document.getElementsByTagName("body")[0];

mode.addEventListener("click", function () {
    if(mode.getAttribute("mode") == "light")
    {
        mode.style.borderColor = "white";
        mode.style.color = "white";
        affichage.style.borderColor = "white";
        affichage.style.color = "white";
        detail.style.borderColor = "white";
        detail.style.color = "white";
        for (let i = 0; i< lesBoutons.length;i++)
        {
            lesBoutons[i].style.borderColor = "white";
            lesBoutons[i].style.color = "white";
        }
        mode.setAttribute("mode", "dark");
        body.style.backgroundColor = "rgb(37,54,58)";
    }else {
        body.style.backgroundColor = "white";
        mode.style.borderColor = "black";
        mode.style.color ="black";
        affichage.style.borderColor = "black";
        affichage.style.color ="black";
        detail.style.borderColor = "black";
        detail.style.color ="black";
        for (let i = 0; i< lesBoutons.length;i++)
        {
            lesBoutons[i].style.borderColor = "black";
            lesBoutons[i].style.color ="black";
        }
        mode.setAttribute("mode", "light");
    }
})
// ************************* // 
var affichage = document.getElementById("affichage");
var lesBoutons = document.getElementsByClassName("bouton");
var detail = document.getElementById("detail");
var back = document.getElementById("back");

for (let i = 0; i < lesBoutons.length; i++) {
    lesBoutons[i].addEventListener("click", eltSelect);
}

back.addEventListener("click", function () {
    affichage.textContent = affichage.textContent.slice(0, -1);
    detail.textContent = detail.textContent.slice(0, -1);
})

var clear = document.getElementById("reset");
clear.addEventListener("click", function () {
    affichage.textContent = "";
    detail.textContent = "";
    temp = "";
    for (let i = 0; i < lesBoutons.length; i++) {
        lesBoutons[i].addEventListener("click", eltSelect);
    }
})
var temp = "";
function eltSelect(e) {
    var eltselect = e.target;
    var boutonClique = eltselect.textContent;
    if (boutonClique != clear.textContent) {
        if (boutonClique != back.textContent)
        if (boutonClique == "=") {
            affichage.textContent = "=" + eval(affichage.textContent);
            for (let i = 0; i < lesBoutons.length; i++) {
                lesBoutons[i].removeEventListener("click", eltSelect);
            }
            detail.textContent = temp;
        } else {
            affichage.textContent += boutonClique;
            temp = affichage.textContent;
        }
    }
}
