<?php 
include "../../function.php";

$tab=nbValeursTableau();

for ($i = 1; $i <= $tab; $i++) {
    $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
    while ($temp < 0 xor !ctype_digit($temp[$i])) {
        echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
    }
    $temp[$i] += 1;
}

affichageTableauforeach($temp);