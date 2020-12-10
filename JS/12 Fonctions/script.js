var x = parseInt(prompt("Entrez un nombre."));
var y = parseInt(prompt("Entrez un nombre."));

function produit(x,y)
{
    return(x*y);
}

alert(produit(x,y));

function afficheImg(img)
{   
    var image = document.createElement("img");
    image.src = img;

    var div = document.getElementById("image");
    div.appendChild(image)
}

afficheImg("ok.jpg")