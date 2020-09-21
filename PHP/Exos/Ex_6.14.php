<?php
include ("../../function.php");

function creationTableau($tab)
{
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

function nbsup($val,$moyenne){
    $nbsup = 0;
    foreach($val as $elt){
        If($elt > $moyenne){
            $nbsup += 1; 
        }
    }
    return $nbsup;
}

$nb=nbValeursTableautaille();
$tab=creationTableau($nb);
echo "La moyenne de la classe est de :".$moyenne=((array_sum($tab))/$nb)."\n";
$nbsup=nbsup($tab,$moyenne);
echo "Il y a ".$nbsup." valeurs au dessus de la moyenne.";
