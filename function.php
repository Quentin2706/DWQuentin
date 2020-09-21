<?php
function factorielle($nombre) //calcule la factorielle d'un nombre

{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nombre; $i++) {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto; //renvoi la factorielle du nombre saisi
}

// utilisation : $var = factorielle($nb)

// ====================== POUR LA FACTORIELLE ça sert a afficher le calcul ======================
// echo "1";
// for ($i=2;$i<=$nombre;$i++){
//     echo " x " .$i;
//     $facto = $facto *$i;   //$facto *=$i;
// }
// echo " = ".$facto;

function verifEntier($phrase) // Demande un entier à l'utilisateur
{
    do {
        do {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}
// utilisation : $tonnombre = verifEntier("ta_demande");

// ====================   AFFICHAGE D'UN TABLEAU SANS FOREACH    ====================

function affichageTableauuniversel($tableau)
{
    for ($i = 0; $i < count($tableau); $i++) {
        echo "[" . $tableau[$i] . "]" . "\t";
    }
    return $tableau;
}

// ====================   AFFICHAGE D'UN TABLEAU AVEC FOREACH    ====================
function affichageTableauforeach($tableau)
{
    foreach ($tableau as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
    return $tableau;
}

// ====================  SAISIE DE VALEURS NUMERIQUE AVEC VERIF  ====================
/* on demande de saisir des valeurs et on vérifie la validité de celle-ci */
function nbValeursTableautaille()
{
    $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }
    return $val;
}

// ====================   CREATION DE TABLEAU    ====================
/* tableau permettant de se créer avec une valeur définie. */
function creationTableauinconnu()
{
    $tab=nbValeursTableautaille();
    for ($i = 1; $i <= $tab; $i++) {
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        while ($temp < 0 xor !ctype_digit($temp[$i])) {
            echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
            $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        }
        $temp[$i]= $temp[$i]*1;
    }
    return $temp;
}

function verifEntierctype($temp)
{
    while ($temp < 0 xor !ctype_digit($temp[$i])) {
        echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
    }
}

function creationTableau($tailletab)
{
    for ($i = 1; $i <= $tailletab; $i++) {
        $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        while ($temp < 0 xor !ctype_digit($temp[$i])) {
            echo ($temp < 0 xor !ctype_digit($temp[$i])) ? "Saisie invalide.\n" : "";
            $temp[$i] = readline("Saisissez la valeur n°" . $i . ":");
        }
        $temp[$i]= $temp[$i]*1;
    }
    return $temp;
}