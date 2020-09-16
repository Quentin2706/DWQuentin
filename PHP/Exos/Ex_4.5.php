<?php

do {
    echo "\n";
    $sexe = strtoupper(readline("Votre sexe (H / F) :" . "\n"));
    if ($sexe != "H" && $sexe != "F") {
        echo "Saisie invalide." . "\n";
    }
} while ($sexe != "H" && $sexe != "F");

do {
    $age = readline("Votre age :" . "\n");
    if (ctype_alpha($age) xor $age < 0) {
        echo "Saisie invalide." . "\n";
    }
} while ($age < 0 && (ctype_alpha($age)));

if (($sexe === "H" and $age > 20) or ($sexe === "F" and ($age >= 18 and $age <= 35))) {
    echo "Vous êtes imposable.";
} else {
    echo "Vous n'êtes pas imposable.";
}
