image = document.getElementById("image");
image.addEventListener("click", retourne)

function retourne() {
    setTimeout(function() {

        src = image.getAttribute("src");
        if (src == "biblethump.png") {
            image.setAttribute("src","Bc_isaac.png");
        } else {
            image.setAttribute("src","biblethump.png");
        }
    },3000)
}