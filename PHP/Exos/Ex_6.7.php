<?php
include "../../function.php";

function affichageTableau($tableau) {
    for ($i = 1;$i<=9;$i++) {
        echo "[".$tableau[$i]."]"."\t";
    } 
    return $tableau;
}

for ($i = 1; $i<=9; $i++){
    $note[$i]=readline("saisissez la note n°".$i.":");
    while($note[$i] < 0 xor !ctype_digit($note[$i])){
        echo $note[$i] < 0 xor !ctype_digit($note[$i]) ? "Saisie invalide.\n" : "";
    $note[$i]=readline("saisissez la note n°".$i.":");
    }
}

$note=affichageTableau($note);




