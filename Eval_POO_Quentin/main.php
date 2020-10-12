<?php
/**
 *      LE CODE PEUT LARGEMENT ETTRE OPTIMISE JE LE SAIS
 * 
 */
function ChargerClasse($Classe)
{
    require $Classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");


MonstreFacile::setCompteur(0);     // on set les compteur a 0, si jamais on relance le programme plusieurs fois.
MonstreDifficile::setCompteur(0);

$monstreInt = rand(1, 0);   // On initialise un random pour définir la difficulté du monstre
$monstreInt == 1 ? $monstre = new MonstreDifficile() : $monstre = new MonstreFacile();
$joueur = new Joueur();
$deMonstre = new De();          // on initialise le joueur ainsi que le dé de chacun
$deJoueur = new De();   

do {
    if ($monstre->getEtatMonstre() == false) {
        $monstreInt = rand(1, 0);                        // Au cas ou le monstre serait mort il recréer un nouveau monstre toujours avec le random
        $monstreInt == 1 ? $monstre = new MonstreDifficile() : $monstre = new MonstreFacile();
    }
    $resultjoueur = $deJoueur->lanceLeDe();             // on lance les dé
    $resultmonstre = $deMonstre->lanceLeDe();
    if ($monstreInt == 0) {                 // Si monstre = 0 alors il sera Facile
        if ($resultjoueur >= $resultmonstre) {
            $joueur->Attaque($monstre);              
        } else if ($resultmonstre > $resultjoueur) {
            $resultjoueur = $deJoueur->lanceLeDe();
            if ($resultjoueur >= 2) {
                $joueur->subitsDegats(10);
            }
        }
    } else {                                // Sinon le monstre sera Difficile
        if ($resultjoueur > $resultmonstre) {
            $joueur->Attaque($monstre);
        } else if ($resultmonstre >= $resultjoueur) {
            $monstre->sortMagique($resultmonstre, $monstre,$joueur);
            $resultjoueur = $deJoueur->lanceLeDe();
            if ($resultjoueur >= 2) {
                $joueur->subitsDegats(10);
            }
        }
    }
} while ($joueur->estVivant() == true);

echo "\nle joueur a tué ".MonstreFacile::getCompteur()." monstres faciles et ".MonstreDifficile::getCompteur()." monstres difficiles.";