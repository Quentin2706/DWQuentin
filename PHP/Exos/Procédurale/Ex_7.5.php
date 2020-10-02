<?php
require"../../function.php";

function creerTableauAvecRand()
{
    for ($i = 1; $i < 10; $i++) {
        $tab[] = rand(1, 1000);
    }
    return $tab;
}

$tab=creerTableauAvecRand();
affichageTableauforeach($tab);
$recherche=readline("\nQuel nombre voulez vous rechercher ?\n");
$result= array_search($recherche,$tab);
echo $result ? "Ce nombre existe dans le tableau" : "Ce nombre n'existe pas dans le tableau";
echo "Le nombre se trouve en position ".$result+=1 ." du tableau";

