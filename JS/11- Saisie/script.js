var tab = [];
do {
    var prenom = prompt("Entre des noms et laissez le champ vide pour terminer la saisie.");
    var temp= tab.push(prenom);
    console.log(prenom);
}while(prenom != "");

console.log("Saisie terminée, "+(tab.length-1)+" prenoms ont été saisis.")





