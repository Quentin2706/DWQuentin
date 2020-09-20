<?php 
// On demande a l'utilisateur la taille du tableau
function tailletableau(){
$val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }
    return $val;
}
// On créer le tableau avec les données que l'utilisateur a donné et on incrémente de 1.
function creationtableau($val){
    for ($i = 1; $i <= $val; $i++) {
        $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
        while ($tab < 0 xor !ctype_digit($tab[$i])) {
            echo ($tab < 0 xor !ctype_digit($tab[$i])) ? "Saisie invalide.\n" : "";
            $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
        }
        $tab[$i] += 1;
    }
    return $tab;
}
// On affiche le tableau avec cette fonction
function affichagetableau6_12($tab){
    foreach ($tab as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
    echo "\nLes valeurs du tableau ont été incrémentées de 1.";
}

// On execute les 3 fonctions 
$val=tailletableau();
$tab=creationtableau($val);
affichagetableau6_12($tab);