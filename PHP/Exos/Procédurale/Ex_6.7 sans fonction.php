<?php

// Initialisation du tableau contenant les saisies des notes.
$somme = 0;
for ($i = 1; $i <= 9; $i++) {
    $note[$i] = readline("saisissez la note n°" . $i . ":");
    while ($note < 0 xor !ctype_digit($note[$i])) {
        echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
        $note[$i] = readline("saisissez la note n°" . $i . ":");
    }
    $somme += $note[$i];
}

// Affichage du tableau et des calculs + résultats.
foreach ($note as $elt) {
    echo "[" . $elt . "]" . "\t";
}

echo "\nMoyenne = (" . $note[1] . " + " . $note[2] . " + " . $note[3] . " + " . $note[4] . " + " . $note[5] . " + " . $note[6] . " + " . $note[7] . " + " . $note[8] . " + " . $note[9] . ") / 9 \n";
echo " Soit " . $somme . "/9 \n";
echo "La moyenne de la classe est de :" . $moyenne = $somme / 9 . "\n";
