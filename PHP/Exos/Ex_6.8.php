<?php

require "../../function.php";
// la fonction qui donne le nombre de valeurs positives et négatives.
function valeurspositivesounegatives($tab)
{
    $valneg = 0;
    $valpos = 0;
    for ($i = 1; $i <= count($tab); $i++) {
        if ($tab[$i] < 0) {
            $valneg += 1;
        } else {
            $valpos += 1;
        }
    }
    echo "Il y a " . $valneg . " valeurs négatives et " . $valpos . " valeurs positives.";
    return $valpos;
    return $valneg;
}
// les fonctions qui permettent d'éxecuter le programme.
$tab = creationTableauinconnu();
valeurspositivesounegatives($tab);
