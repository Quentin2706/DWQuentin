<?php
// ça fonctionne a moitié. GRRRRRRRRR
echo "\n Racine de l'equation du 2nd degré\n";
echo "\t\tY=aX² + bX + c\n\n";
do {
    $nb_a = readline("Quelle est la valeur de a : ");
    $nb_b = readline("Quelle est la valeur de b : ");
    $nb_c = readline("Quelle est la valeur de c : ");

    $delta = ($nb_b * $nb_b) - (4 * $nb_a * $nb_c);
    $X1 = $nb_a && $nb_b != 0 ? (-$nb_b + sqrt($delta)) / (2 * $nb_a) : "";
    $X2 = $nb_a && $nb_b != 0 ? (-$nb_b - sqrt($delta)) / (2 * $nb_a) : "";

//     switch ($delta) {
    //         case $delta == 0 && $X1 == $X2:
    //             echo " L'équation possède une racine double :\n";
    //             echo " d = " . $delta . "\n";
    //             echo " x1=x2= " . $X1 . "\n";
    //         break;
    //         case $delta != 0 && $X1 != $X2 :
    //             echo " L'équation possède 2 racines distinctes :\n";
    //             echo " d = " . $delta . "\n";
    //             echo " L'équation s'annule pour :\n";
    //             $X1 = (-$nb_b + sqrt($delta)) / (2 * $nb_a);
    //             $X2 = (-$nb_b - sqrt($delta)) / (2 * $nb_a);
    //             echo " x1= " . $X1 . "\n";
    //             echo " x2= " . $X2 . "\n\n";
    //         break;
    //         case $delta < 0 && (is_nan($X1) && is_nan($X2)):
    //             echo " L'équation ne possède pas de racine réelle :\n";
    //             echo " d = " . $delta . "\n\n";
    //         break;
    //         case $nb_a == 0 && $nb_b > 0:
    //             echo " L'équation est du premier degré\n\n";
    //             $result = -($nb_c/$nb_b);
    //             echo " L'équation s'annule pour x=-(c/b) :".$result."\n";
    //         break;
    //         case $nb_a === 0 && $nb_b === 0:
    //             echo " L'équation n'en est plus une !!!";
    //     }
    //     $restart = readline("Voulez vous continuer ? ");
    // } while ($restart == "O");
    // echo "\nAu revoir et à bientôt!\n";

    switch ($nb_a) {
        case $nb_b > 0 && $nb_a == 0:
            echo " L'équation est du premier degré\n\n";
            $result = -($nb_c / $nb_b);
            echo " L'équation s'annule pour x=-(c/b) :" . $result . "\n";
            break;
        case ($nb_a != $nb_b) && ($nb_a > 0 && $nb_b > 0):
            echo " L'équation ne possède pas de racine réelle :\n";
            echo " d = " . $delta . "\n\n";
            break;
        case $nb_a < 0 && $nb_b > 0:
            echo " L'équation possède 2 racines distinctes :\n";
            echo " d = " . $delta . "\n";
            echo " L'équation s'annule pour :\n";
            $X1 = (-$nb_b + sqrt($delta)) / (2 * $nb_a);
            $X2 = (-$nb_b - sqrt($delta)) / (2 * $nb_a);
            echo " x1= " . $X1 . "\n";
            echo " x2= " . $X2 . "\n\n";
            break;
        case $nb_a == $nb_b:
            echo " L'équation possède une racine double :\n";
            echo " d = " . $delta . "\n";
            echo " x1=x2= " . $X1 . "\n";
            break;
        case $nb_a + $nb_b == 0:
            echo " L'équation n'en est plus une !!!";
        break;
    }
    $restart = readline("Voulez vous continuer ? ");
} while ($restart == "O");
echo "\nAu revoir et à bientôt!\n";
