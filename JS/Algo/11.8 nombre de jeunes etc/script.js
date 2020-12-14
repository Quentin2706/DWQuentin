var jeunes = 0;
var moyen = 0;
var vieux = 0;
var tab = []

do{
    var age = parseInt(prompt("Entrez un age la saisie ce termine dés la saisie d'un centenaire."));
    tab.push(age);
    console.log(tab);
    console.log(age);
}while(age < 100);

for (let i = 0; i<tab.length;i++)
{
    if(tab[i] < 20)
    {
        jeunes +=1;
    } else if (tab[i] > 40)
    {
        moyen +=1;
    }else {
        vieux +=1 ;
}
    }


document.write(jeunes+"<br>");
document.write(moyen+"<br>");
document.write(vieux+"<br>");