<?php 
include "../../function.php";


$val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }

for ($i = 1; $i <= $val; $i++) {
    $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
    while ($tab < 0 xor !ctype_digit($tab[$i])) {
        echo ($tab < 0 xor !ctype_digit($tab[$i])) ? "Saisie invalide.\n" : "";
        $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
    }
    $tab[$i] += 1;
}

foreach ($tab as $elt) {
    echo "[" . $elt . "]" . "\t";
}
