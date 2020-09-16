<?php
$nb1 = readline("Entrez un premier nombre.");
$nb2 = readline("Entrez un deuxieme nombre.");

if ($nb1 < 0 xor $nb2 < 0) {
    echo "Le produit des deux nombres est négatif.";
} else if ($nb1 > 0 && $nb2 > 0) {
    echo "Le produit des deux nombres est positif.";
} else {
    echo "Le produit des deux nombres est nul.";
}
