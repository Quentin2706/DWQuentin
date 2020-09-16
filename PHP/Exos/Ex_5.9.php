<?php
echo "Entrez le prix de vos article à la suite puis tapez 0 pour terminer la saisie.\n";

$somme = 0;
$b10 = 0;
$b5 = 0;
$p1 = 0;

do {
    $prix = readline("Entrez le prix de l'article :");
    if (ctype_digit($prix)) {
        $somme = $somme + $prix;
    }
} while (!ctype_digit($prix) xor $prix < 0 xor $prix != 0);

echo "Vous devez : " . $somme . " euros.\n";
$rendu = readline("Combien donnez vous en espèces ?");
while ($rendu < $somme) {
    echo "Ce n'est pas assez, vous devez : " . $somme . " euros.";
    $rendu = readline("Votre somme en espèces doit être supérieure ou égal au paiement.");
}
$somme = $rendu - $somme;
echo "On doit : " . $somme . " euros.\n";

while ($somme >= 10) {
    $b10 = $b10 + 1;
    // $somme = $somme - 10;
    $somme -= 10;
}
echo " il faut rendre " . $b10 . " billets de 10 euros.\n";

while ($somme >= 5) {
    $b5 = $b5 + 1;
    // $somme = $somme - 5;
    $somme -= 5;
}
echo " il faut rendre " . $b5 . " billets de 5 euros.\n";

while ($somme >= 1) {
    $p1 = $p1 + 1;
    // $somme = $somme - 1;
    $somme -= 1;
}
echo " il faut rendre " . $p1 . " pièces de 1 euro.\n";
