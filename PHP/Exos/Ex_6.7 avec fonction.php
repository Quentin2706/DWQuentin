<?php
// Initialisation de la fonction.
include "../../function.php";

function creationtableau6_7(){
    $somme = 0;
for($i = 1; $i <= 9; $i++){
    $note[$i] = readline("saisissez la note n°" . $i . ":");
    while ($note < 0 xor !ctype_digit($note[$i])) {
        echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
        $note[$i] = readline("saisissez la note n°" . $i . ":");
    }
    $somme += $note[$i];
}
return $notes
}
// la fonction qui donne la moyenne des valeurs saisies.
function moyenne6_7($note){
    echo "\n";
echo "Moyenne = (".$note[1]. " + ".$note[2]." + ".$note[3]." + ".$note[4]." + ".$note[5]." + ".$note[6]." + ".$note[7]." + ".$note[8]." + ".$note[9].") / 9 = ".$moyenne = $somme / 9 ."\n";
echo " Soit ".$array_sum($note)."/9 = ".$moyenne = $array_sum($note) / 9 ."\n";
echo "La moyenne de la classe est de :".$moyenne = $array_sum($note) / 9 ."\n";
}
}

// Initialisation du tableau contenant les saisies des notes.
creationtableau6_7();
// Affichage du tableau et des calculs + résultats.
affichageTableauforeach($note);
moyenne6_7($note);

