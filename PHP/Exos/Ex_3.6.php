<?php

$age = readline("Quel age votre enfant a t-il ?");

// if($age >= 6 and $age <= 7){
//     echo "Votre enfant sera dans la catégorie \"Poussin\"";
// } else if ($age >= 8 and $age <= 9){
//     echo "Votre enfant sera dans la catégorie \"Pupille\"";
// } else if ($age >= 10 and $age <= 11){
//     echo "Votre enfant sera dans la catégorie \"Minime\"";
// } else if ($age >= 12){
//     echo "Votre enfant sera dans la catégorie \"Cadet\"";

// } else if ($age < 6){   // Ici c'est au cas ou l'utilisateur entre une valeur inférieur a 6
//     echo "votre enfant n'a pas l'âge requis pour intégrer l'équipe.";
// }

switch ($age) {
    case $age >= 6 and $age <= 7:
        echo "Votre enfant sera dans la catégorie \"Poussin\"";
        break;
    case $age >= 8 and $age <= 9:
        echo "Votre enfant sera dans la catégorie \"Pupille\"";
        break;
    case $age >= 10 and $age <= 11:
        echo "Votre enfant sera dans la catégorie \"Minime\"";
        break;
    case $age >= 12 and $age <= 14:
        echo "Votre enfant sera dans la catégorie \"Cadet\"";
        break;
    default:
        echo "Votre enfant ne peut pas intégrer de catégorie.";
}
