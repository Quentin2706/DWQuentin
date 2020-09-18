<?php 
include "../../function.php";
function creationtableau6_12($tab){
for ($i = 1; $i <= $tab; $i++){
    $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
    while ($temp < 0 xor !ctype_digit($temp[$i])) {
        echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
    }
    $temp[$i] += 1;
    return $temp;
}
}
function affichagetableau6_12($temp){
    echo "Voici le nouveaux tableau avec les valeurs qui ont été incrémentées de 1.";
affichageTableauforeach($temp);
}
$tab=nbValeursTableau();
creationtableau6_12($tab);
affichagetableau6_12($temp);