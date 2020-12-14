var tab = [];
do{
var nb = parseInt(prompt("Entrez un nombre et saisissez 0 pour terminer la saisie."));
let temp= tab.push(nb);
}while(nb != 0);
var result = 0;
var tabLength = tab.length-1
for(let i = 0; i < tabLength;i++)
{
    result +=tab[i];
}
document.write("moyenne : "+result/tabLength);




