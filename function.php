<?php
function factorielle($nombre) //calcule la factorielle d'un nombre
{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nombre; $i++)
    {
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
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}
// utilisation : $tonnombre = verifEntier("ta_demande");

function affichageTableauuniversel($tableau,$compteur) {
    for ($i = 0;$i<$compteur;$i++) {
        echo "[",$tableau[$i],"]"."\t";
    } 
    return $tableau;
}

function verifNum($nombre){

}