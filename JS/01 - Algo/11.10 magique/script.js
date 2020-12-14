
do {
var random = parseInt(Math.random()*100);

do {
var nb = parseInt(prompt("Entrez le nombre"));
if (nb != random)
{
    if(nb > random)
    {
        alert("plus petit");
    } else {
        alert("plus grand");
    }
} else {
    alert("Victoire !")
    confirme = confirm("Voulez vous rejouer ?")
}
}while(nb != random)
} while(confirme == true);
