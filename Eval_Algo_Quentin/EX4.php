<?php

$tb1 = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$tb2 = ["B0", "AB", "LJ", "DC", "CO", "AN"];
$tb3 = [800, 950, 700, 900, 1400, 560];
$tb4 = [10000, 12000, 4500, 8000, 16000, 2500];

do {
    $avion = readline("Entre le code de l'avion : ");
    $result_avion = array_search($avion, $tb2);

    while ($result_avion == false) {
        echo $result_avion ? "" : "\nCet avion n'existe pas";
        $avion = readline("\nEntre le code de l'avion : ");
    }

    switch ($avion) {
        case $avion = "B0":
            echo " Avion : BOING747 ";
            echo " Vitesse : 800";
            echo " Rayon d'action : 10000";
            break;
        case $avion = "AB":
            echo " Avion : AIRBUSA380 ";
            echo " Vitesse : 950 ";
            echo " Rayon d'action : 12000";
            break;
        case $avion = "LJ":
            echo " Avion : LEARJET45 ";
            echo " Vitesse : 700 ";
            echo " Rayon d'action : 4500";
            break;
        case $avion = "DC":
            echo " Avion : DC10 ";
            echo " Vitesse : 900 ";
            echo " Rayon d'action : 8000";
            break;
        case $avion = "CO":
            echo " Avion : CONCORDE ";
            echo " Vitesse : 1400 ";
            echo " Rayon d'action : 16000 ";
            break;
        case $avion = "AN":
            echo " Avion : ANTONOV32 ";
            echo " Vitesse : 560 ";
            echo " Rayon d'action : 2500";
            break;
    }

    $stats = ("\nVoulez vous editer les satistiques (O/N) : ");
    $stats = "O" ? $stats = true : $stats = false;
    if ($stats == true) {

    }
    $stop = readline("\nVoulez vous faire une autre recherche (O/N) ?");
} while ($stop == "O");
