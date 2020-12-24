var casepasvide = document.getElementsByClassName("pasVide");
var nb = [1, 2, 3, 4, 5, 6, 7, 8, 9]
nb = nb.map(p => [p, Math.random()])
nb = nb.sort((a, b) => a[1] - b[1])
nb = nb.map(p => p[0])

for (let i = 0; i < nb.length; i++) {
    if (nb[i] == 9)
    {
        var tempi = i;
    }
    casepasvide[i].textContent = nb[i];
    casepasvide[i].addEventListener("click", function (e) {
        deplace(e);
    })
}

console.log(nb[tempi]);
casepasvide[tempi].setAttribute("class", "vide centre");
var caseVide = document.getElementsByClassName("vide")[0];
var caseVidePosX = parseInt(caseVide.getAttribute("posx"));
var caseVidePosY = parseInt(caseVide.getAttribute("posy"));

caseVide.addEventListener("click", function (e) {
    deplace(e);
})

function deplace(e) {
    var ciblePosY = parseInt(e.target.getAttribute("posy"));
    var ciblePosX = parseInt(e.target.getAttribute("posx"));
    if ((Math.abs(caseVidePosY - ciblePosY) == 1 ^ Math.abs(caseVidePosX - ciblePosX) == 1) && (Math.abs(caseVidePosY - ciblePosY) < 2) && (Math.abs(caseVidePosX - ciblePosX) < 2)) {
            caseVide.textContent = e.target.textContent;
            caseVide.style.color = "white";
            caseVide.setAttribute("class", "pasVide centre");
            e.target.textContent = "";
            e.target.style.color = "#283541";
            e.target.setAttribute("class", "vide centre");
            caseVide = document.getElementsByClassName("vide")[0];
            caseVidePosX = ciblePosX;
            caseVidePosY = ciblePosY;
    }
}
