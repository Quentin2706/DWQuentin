<?php
/// ord substr chr
// $pos= "A1";
function affichageTableauforeach($tableau)
{
    foreach ($tableau as $elt) {
        echo "[" . $elt . "]" . "\t";
    }
    return $tableau;
}
$coordonnees = "K1";

function conversionPosition($coordonnees)
{
    $coordonnees = strtoupper($coordonnees);
    $longueur = strlen($coordonnees);
    if ($longueur < 3) {
        if (ctype_alpha($coordonnees[0])) {
            $lettre = $coordonnees[0];
            $numeroColonne = ord($lettre) - ord('A');
            $tab[0] = $numeroColonne ;
            $tab[1] = $coordonnees[1];
        } else {
            $lettre = $coordonnees[1];
            $numeroColonne = ord($lettre) - ord('A');
            $tab[1]=$numeroColonne ;
            $tab[0] = $coordonnees[2];
        }
    } else {
        if (ctype_alpha($coordonnees[0])) {
            $lettre = $coordonnees[0];
            $numeroColonne = ord($lettre) - ord('A');
            var_dump($numeroColonne);
            var_dump($lettre);
            $tab[1]=$numeroColonne ;
            $tab[0]= ($coordonnees[1]*10) +($coordonnees[2]-1);
        } else {
            $lettre = $coordonnees[2];
            $numeroColonne = ord($lettre) - ord('A');
            $tab[1]=$numeroColonne ;
            $tab[0]= ($coordonnees[0]*10) +($coordonnees[1]-1);
        }
    }
return $tab; 
}
$tab = conversionPosition($coordonnees);
echo " ça doit donner A, 10 : ";
affichageTableauforeach($tab);

// $coordonnees = strtoupper($coordonnees);
// $tabPositions = str_split($coordonnees);
// $longcoord = strlen($coordonnees);
// if (count($tabPositions) < 2) {
//     if (ctype_alpha($tabPositions[0])) {
//         $ascii = $tabPositions[0];
//         $ascii = ord($ascii) - 17;
//         $ascii = chr($ascii);
//         $tabPositions[0] = $ascii;
//     } else {
//         $ascii = $tabPositions[1];
//         $ascii = ord($ascii) - 17;
//         $ascii = chr($ascii);
//         $tabPositions[1] = $tabPositions[1] - 1;
//     }

// } else {
//     if (ctype_alpha($tabPositions[0])) {
//         $ascii = $tabPositions[0];
//         $ascii = ord($ascii) - 17;
//         $ascii = chr($ascii);
//         $tabPositions[0] = $ascii;
//     } else {
//         $ascii = $tabPositions[2];
//         $ascii = ord($ascii) - 17;
//         $ascii = chr($ascii);
//         $tabPositions[0] = $tabPositions[0] * 10;
//         $tabPositions[1] = $tabPositions[1] - 1;
//         $tabPositions[0] = $tabPositions[0] * 10 + $tabPositions[1];
//         $tabPositions[2] = [)]
//     }
