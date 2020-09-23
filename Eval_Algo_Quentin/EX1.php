<?php
// calcul de la surface S = ΠR²
// calcul de la circonférence = 2xPixR

echo "\t\t\t CALCUL D'UN CERCLE\n";

do {
    // demande a l'utilisatuer de saisir le rayon du cercle
    $rayon = readline("Quel est le rayon du cercle : ");
    // on effectue les calculs dont on a besoin
    $circonference = 2 * 3.14159265358979323846 * $rayon;
    $surface = 3.14159265358979323846 * pow($rayon, 2); 
    // On affiche les résultats
    echo "\nSa circonférence est de \t: " . $circonference;
    echo "\nSa surface est de \t\t: " . $surface . "\n\n";
    // on demande a l'utilisateur s'il veut refaire une saisie si oui on refait une boucle sinon on sort de la boucle
    $restart = readline("Voulez-vous faire un autre calcul (O/N) : ");
} while ($restart == "O");
// message de fin de l'execution d programme.
echo "\nAu revoir et à bientôt!\n";
