var nb = parseInt(prompt("Donnez un chiffre entre 1 et 3 1=afficheTableau entier, 2=afficher une case du tableau 3= affiche la somme et la moyenne du tableau"));
function getInteger()
{
    var long = parseInt(prompt("Donnez la longueur du tableau"));
    return long;
}

function initTab() {
    var array = []; 
    return array; 
}

function saisieTab(array, long) {
    for(let i = 0; i<long; i++)
    {
        var val = parseInt(prompt("donnez la valeur."));
        array.push(val);
    }
    return array;
}


function afficheTab(array, long)
{
    for (let i = 0; i<long; i++)
    {
        document.write("Valeur n°"+i+" : "+array[i]);
    }
}

function rechercheTab(array){
    var recherche = parseInt(prompt("Donnez un l'index de la valeur que vous recherchez"));
    recherche-=1;
    for (let i = 0; i <= recherche;i++)
    {
        recherche == i ? document.write("La valeur recherchée est "+array[i]) : "";
    }
}

function infoTab(array)
{
    max = array[1];
    var somme= 0;
    var moy = 0; 
    for (let i = 0; i < array.length;i++)
    {
    array[i] > max ? max = tab[i] : max=max;
    somme += array[i];
    console.log(somme);
    moy = somme/array.length;
    }
    document.write("Valeur max = "+max);
    document.write("Valeur moyenne = "+moy);

}

long = getInteger();
var tab = initTab(); 
saisieTab(tab, long);
if(nb == 1)
{
    afficheTab(tab, long);
} else if (nb == 2)
{
    rechercheTab(tab);
} else {
    infoTab(tab);
}