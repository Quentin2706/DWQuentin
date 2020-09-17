<?php

$fact = readline("Entrez un nombre pour y voir sa factorielle :");
$fact1 = 1;
while (!is_numeric($fact)) {
    echo "Saisie incorrecte.\n";
    echo " ";
    $fact = readline("Entrez un nombre pour y voir sa factorielle :");
}

for ($i = 1; $i <= $fact; $i++){
    $fact1 = $fact1*$i;
}

echo "La factorielle est : " . $fact1 . "\n";
echo "Le calcul est :";
echo "1";
for ($i=2;$i<=$nombre;$i++){
    echo " x " .$i;
    $facto = $facto *$i;   //$facto *=$i;
}
echo " = ".$facto;

