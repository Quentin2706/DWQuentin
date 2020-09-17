<?php
include"../../function.php";

$chpart= verifEntier("Entrez le nombre de chevaux partants :");

while (!ctype_digit($chpart) xor $chpart < 0) {
    $chpart = readline("Entrez le nombre de chevaux partants :");
    if (!ctype_digit($chpart) xor $chpart < 0) {
        echo "Saisie incorrecte recommencez\n";
    }
}

$chjoues= verifEntier("Entrez le nombre de chevaux joués :");

while (!ctype_digit($chjoues) xor $chjoues < 0) {
    $chpart = readline("Entrez le nombre de chevaux partants :");
    if (!ctype_digit($chjoues) xor $chjoues < 0) {
        echo "Saisie incorrecte recommencez\n";
    }
}

$factpart= factorielle($chpart);
$factjoues= factorielle($chjoues);
$factpartjoues= factorielle($chpart-$chjoues);
$x = $factpart / $factpartjoues;
$y = $factpart / ($factjoues * ($factpartjoues));

echo "Vous avez une chance sur " . $x . " de gagner dans l'ordre.\n";
echo "Vous avez une chance sur " . $y . " de gagner dans le désordre.";