var sit = confirm("Le salarié est célibataire");

var nbEnfant = parseInt(prompt("Nombre d'enfants"));
var salaire = parseInt(prompt("Salaire du salarié")); 

if(sit == false)
{
    var part = 0.25;
} else {
    var part = 0.2;
}

(nbEnfant == "") ? nbEnfant = 0 : nbEnfant = nbEnfant;
if (nbEnfant > 0) {
    var partEnfant = 0.1*nbEnfant
} else {
    var partEnfant = 0;
}

var part = part+partEnfant;
salaire < 1200 ? part += 0.1 : part = part;
part > 0.5 ? part = 0.5 : part = part;
alert(part);





