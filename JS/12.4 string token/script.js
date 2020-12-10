var str1 = prompt("Entre votre chaine de caractere.");
var str2 = prompt("Votre délimiteur ");
var n = prompt("Quel mot voulez vous selectionner donne le nombre");

function strtok(str1,str2, n)
{
    mot = str1.split(str2);
    console.log(mot[n-1]);
}
strtok(str1,str2,n);



