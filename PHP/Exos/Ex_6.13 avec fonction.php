<?php
// on demande a l'utilisatteur combiend e valeur il souhaite saisir en vérifiant les données.
function nbValeursTableautaille()
{
    $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }
    return $val;
}
/* tableau permettant de se créer avec une valeur définie. */
function creationTableauinconnu($tab)
{
    for ($i = 1; $i <= $tab; $i++) {
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        while ($temp < 0 xor !ctype_digit($temp[$i])) {
            echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
            $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        }
        $temp[$i]= $temp[$i]*1;
    }
    return $temp;
}

$nb=nbValeursTableautaille();
$tab=creationTableauinconnu($nb);
echo "la valeur la plus haute est :".max($tab).", elle se trouve à la position : ".array_search(max($tab),$tab);