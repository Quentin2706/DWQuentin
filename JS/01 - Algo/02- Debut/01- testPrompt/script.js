var nomUser = prompt("Nom : ");
console.log(nomUser);
var prenomUser = prompt("Prenom : ");
console.log(prenomUser);
var genre = confirm("Etes-vous un homme ?");
console.log(genre);

if(genre == false)
{
    alert("Bonjour Madame "+nomUser+" "+prenomUser);
} else {
    alert("Bonjour Monsieur "+nomUser+" "+prenomUser);
}



