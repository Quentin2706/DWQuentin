<?php
// on demande le nombre de valeurs a saisir en vérifiant les données
function tailletableau()
{
    $nombre = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($nombre)) {
        echo (!ctype_digit($nombre) xor $nombre < 0) ? "Saisie invalide.\n" : "";
        $nombre = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }
    return $nombre;
}
// on crée le tableau en vérifiant les données
function creationtableau($val)
{
    for ($i = 1; $i <= $val; $i++) {
        $note[$i] = readline("saisissez la valeur n°" . $i . ":");
        while ($note < 0 xor !ctype_digit($note[$i])) {
            echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
            $note[$i] = readline("saisissez la valeur n°" . $i . ":");
        }
    }
    return $note;
}
// on affiche le tableau
function affichagetableau($note)
{
    foreach ($note as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
}

// Ici on calcule la moyenne au début puis le foreach sert a compter les valeurs au dessus de la moyenne et avec le for a la fin de cette fonction on afficher le détail du calcul.
function calculsmoyenne($tab, $val)
{
    $moyenne = array_sum($tab) / $val;
    $nbsup = 0;
    foreach ($tab as $elt) {
        if ($elt > $moyenne) {
            $nbsup += 1;
        }
    }
    echo "\n moyenne = (".$tab[1];
    for ($i = 2; $i < $val; $i++) {
        echo " + " . $tab[$i];
    }
    echo " + " . $tab[$val] . ") / " . $val;
    echo "La moyenne de la classe est de :" . $moyenne . "\n";
    echo "\n Il y a " . $nbsup . " notes supérieures à la moyenne de la classe.";

}

$val = tailletableau();
$note = creationtableau($val);
affichagetableau($note);
calculsmoyenne($note, $val);
