<?php

$fact = readline("Entrez un nombre pour y voir sa factorielle :");

while (!is_numeric($fact)){
    echo "Saisie incorrecte.\n";
    echo " ";
    $fact=readline("Entrez un nombre pour y voir sa factorielle :");  
}
$fact = gmp_fact($fact);
echo "Le calcul est :";
echo "La factorielle est : ".gmp_strval($fact)."\n";


