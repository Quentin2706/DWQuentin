var phrase = prompt("Entrez la phrase ");
var lettre = prompt("Entrez la lettre ");
function compterLettre(phrase, lettre) {
var result = 0;
for (let i = 0; i < phrase.length; i++) {
        if (phrase[i] == lettre)
        { 
        result += 1;
        }
    }
    alert("il y a "+result+ " de fois "+lettre);
}
compterLettre(phrase, lettre);
