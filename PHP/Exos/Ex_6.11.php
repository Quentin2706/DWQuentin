<?php

require "../../function.php";
// on demande la taille du tableau a l'utilisateur et apres on lui fait saisir les valeurs.
echo "========= Saisissez les valeurs du tableau n°1 =========\n";
$tab1 = creationTableauinconnu();
echo "========= Saisissez les valeurs du tableau n°2 =========\n";
$tab2 = creationTableauinconnu();

for ($i = 1; $i <= count($tab2); $i++) {
    for ($j = 1; $j <= count($tab1); $j++) {
        $result[] = $tab2[$i] * $tab1[$j];
    }
}
echo "\nle schtroumpf sera de :" . array_sum($result);
