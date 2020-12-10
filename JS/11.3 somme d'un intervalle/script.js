var nb1 = parseInt(prompt("Entrez un nombre."));

var result = 0
if(nb1 > nb2) 
{
    compteur = nb1;
    start = nb2;
} else {
    compteur = nb2;
    start = nb1;
}


for(let i = (start+1); i < compteur;i++)
{
    console.log(i);
    result += i;
    console.log(result);
}
document.write(result);





