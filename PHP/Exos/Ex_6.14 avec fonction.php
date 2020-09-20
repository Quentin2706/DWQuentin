<?php
function tailletableau()
{
    $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }
    return $val;
}

function creationtableau($val)
{
    for ($i = 1; $i <= $val; $i++) {
        $note[$i] = readline("saisissez la note n°" . $i . ":");
        while ($note < 0 xor !ctype_digit($note[$i])) {
            echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
            $note[$i] = readline("saisissez la note n°" . $i . ":");
        }
        return $note;
    }
}
function affichagetableau($note)
{
    foreach ($note as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
}

// Probleme avec cette fonction "undefined offset"
function calculsmoyenne($tab, $val)
{
    echo "\nMoyenne = (" . $tab[1];
    $compteur = 2;
    foreach ($tab as $elt) {
        echo " + " . $tab[$compteur];
        $compteur += 1;
    }
    echo ") / " . $val;

    echo ", soit " . array_sum($tab) . " / " . $val . "\n";
    echo "La moyenne de la classe est de :" . $moyenne = array_sum($tab) / $val . "\n";
    $nbsup = 0;
    foreach ($tab as $elt) {
        if ($elt > $moyenne) {
            $nbsup += 1;
        }
    }
    echo "\n Il y a " . $nbsup . " notes supérieures à la moyenne de la classe.";

}

$val = tailletableau();
$note = creationtableau($val);
$notetab = affichagetableau($note);
calculsmoyenne($note, $val);
