<?php

// ========= REQUETES de nombres de votes total et par candidat et Vérification des données =========
$c0 = readline("Combien de personnes ont voté J.charal ?\n");
$c1 = readline("Combien de personnes ont voté E.Roblochon ?\n");
$c2 = readline("Combien de personnes ont voté T.Balcon ?\n");
$c3 = readline("Combien de personnes ont voté H.Castagne ?\n");

while (!ctype_digit($c0) or !ctype_digit($c1) or !ctype_digit($c2) or !ctype_digit($c3) && (($c0 < 0) or ($c1 < 0) or ($c2 < 0) or ($c3 < 0))){
    echo "Saisie invalide." . "\n";
    echo " \n";
    $c0 = readline("Combien de personnes ont voté J.charal ?\n");
    $c1 = readline("Combien de personnes ont voté E.Roblochon ?\n");
    $c2 = readline("Combien de personnes ont voté T.Balcon ?\n");
    $c3 = readline("Combien de personnes ont voté H.Castagne ?\n");
}


// ========= calculs des pourcentages =========
$Total_des_votes = $c0 + $c1 + $c2 + $c3;
$c0 = ($c0 / $Total_des_votes) * 100;
$c1 = ($c1 / $Total_des_votes) * 100;
$c2 = ($c2 / $Total_des_votes) * 100;
$c3 = ($c3 / $Total_des_votes) * 100;

// ========= Les conditions pour les résultats =========
switch ($c0) {
    case $c0 > 50:
        echo "J.charal est élu dés le premier tour.";
        break;
    case $c0 > $c1 && $c0 > $c2 && $c0 > $c3:
        echo "J.charal est favorable pour le deuxième tour.";
        break;
    case $c0 < $c1 && $c0 < $c2 && $c0 < $c3 && $c1 < 50 && $c2 < 50 && $c3 < 50:
        echo "J.charal est défavorable pour le deuxième tour.";
        break;
    case $c0 == $c1 && $c0 == $c2 && $c0 == $c3:
        echo "J.charal n'est ni favorable ou défavorable pour le deuxième tour.";
        break;
    default:
        echo "J.charal est éliminé.";
        break;
}

/* ========= LES TESTS =========
C0 = 51
C1 = 10    C0 est élu au premier tour.
C2 = 30
C3 = 9

C0 = 31
C1 = 20    C0 est favorable pour le deuxieme tour.
C2 = 14
C3 = 25

C0 = 15
C1 = 45    C0 est défavorable au deuxieme tour.
C2 = 20
C3 = 20

C0 = 25
C1 = 25    C0 n'est ni favorable ou défavorable pour le deuxième tour.
C2 = 25
C3 = 25

C0 = 25
C1 = 9     C0 est battu dés le premier tour.
C2 = 51
C3 = 15

C0 = fzefz
C1 = fzefz
C2 = 10     Saisie invalide.
C3 = 10

C0 = -1
C1 = 10
C2 = 10      Saisie invalide.
C2 = 10
C3 = 10
 */
