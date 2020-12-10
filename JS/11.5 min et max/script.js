var tab = [];
do{
var nb = parseInt(prompt("Entrez un nombre et saisissez 0 pour terminer la saisie."));
let temp= tab.push(nb);
}while(nb != 0);
var tabLength = tab.length-1

for(let i = 0; i < tabLength;i++)
{
    max = tab[1];
    console.log(max);
    min = tab[1];
    console.log(max);
    tab[i] > max ? max = tab[i] : max=max;
    tab[i] < min ? min = tab[i] : min=min;
}
document.write("min : "+min);
document.write("<br></br>");
document.write("max : "+max);






