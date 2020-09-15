<?php

// ========= REQUETES de nombres de votes total et par candidat et Vérification des données =========
do {
$c[0]= readline("Combien de personnes ont voté J.charal ?\n");
$c[1]= readline("Combien de personnes ont voté E.Roblochon ?\n");
$c[2]= readline("Combien de personnes ont voté T.Balcon ?\n");
$c[3]= readline("Combien de personnes ont voté H.Castagne ?\n");
    if (!ctype_digit($c[0]) xor !ctype_digit($c[1]) xor !ctype_digit($c[2]) xor !ctype_digit($c[3])) {
        echo "Saisie invalide." . "\n";
    }
} while (!ctype_digit($c[0]) xor !ctype_digit($c[1]) xor !ctype_digit($c[2]) xor !ctype_digit($c[3]) && (($c[0] < 0) && ($c[1] < 0) && ($c[2] < 0) && ($c[3] < 0)));


// ========= calculs des pourcentages =========
$TOTAL_DES_VOTES = $c[0]+$c[1]+$c[2]+$c[3];
$c[0] = ($c[0]/$Total_des_votes)*100;
$c[1] = ($c[1]/$Total_des_votes)*100;
$c[2] = ($c[2]/$Total_des_votes)*100;
$c[3] = ($c[3]/$Total_des_votes)*100;

// ========= pour l'instant je sais pas =========

switch ($c[0]) {
    case $c[0] > 50 :
        echo "J.charal est élu dés le premier tour.";
        break;
    case $c[0] > 12.5 :
        echo "J.charal est favorable dés le premier tour.";
        break;
    default:
        # code...
        break;
}