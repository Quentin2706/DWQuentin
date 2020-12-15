var texte1 = document.getElementById("text1");
var h1 = document.getElementsByTagName("h1");

texte1.addEventListener("click", function () {
    texte1.getAttribute("bcgcolor") == "vert" ? texte1.style.backgroundColor = "red" : texte1.style.backgroundColor = "green";
    texte1.getAttribute("bcgcolor") == "vert" ? texte1.setAttribute("bcgcolor", "rouge") : texte1.setAttribute("bcgcolor", "vert");
})
for (let i = 0; i < h1.length; i++) {
    h1[i].style.color = "blue"
}

for (let i = 0; i < h1.length; i++) {
    h1[i].addEventListener("click", function () {
        for (let i = 0; i < h1.length; i++) {
            if (h1[i].style.color == "blue") {
                h1[i].style.color = "white";
            } else if (h1[i].style.color == "white") {
                h1[i].style.color = "red";
            } else if (h1[i].style.color == "red") {
                h1[i].style.color = "blue";
            }
        }
    })

}


