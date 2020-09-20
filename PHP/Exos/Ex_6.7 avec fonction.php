<?php
// Initialisation de la fonction.

function creationtableau6_7()
{
    for ($i = 1; $i <= 9; $i++) {
        $note[$i] = readline("saisissez la note n°" . $i . ":");
        while ($note < 0 xor !ctype_digit($note[$i])) {
            echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
            $note[$i] = readline("saisissez la note n°" . $i . ":");
        }
        $note[$i] *= 1;
    }
    return $note;
}
// la fonction qui donne la moyenne des valeurs saisies.
function moyenne6_7($tab)
{
    echo "\nMoyenne = (" . $tab[1] . " + " . $tab[2] . " + " . $tab[3] . " + " . $tab[4] . " + " . $tab[5] . " + " . $tab[6] . " + " . $tab[7] . " + " . $tab[8] . " + " . $tab[9] . ") / 9 \n";
    echo " Soit " . array_sum($tab) . "/9 \n";
    echo "La moyenne de la classe est de : " . $moyenne = array_sum($tab) / 9 . "\n";
    return $moyenne;
}

function affichagetableau6_7($tab)
{
    foreach ($tab as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
    return $tab;
}
// Initialisation du tableau contenant les saisies des notes.
$note = creationtableau6_7();
// Affichage du tableau et des calculs + résultats.
$tableau = affichagetableau6_7($note);
moyenne6_7($tableau);
