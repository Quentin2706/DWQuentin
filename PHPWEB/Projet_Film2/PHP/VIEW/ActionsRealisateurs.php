<?php
var_dump($_POST);
$p = new Realisateurs($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutRealisateur":
        {
            RealisateursManager::add($p);
            break;
        }
    case "modifRealisateur":
        {   
            RealisateursManager::update($p);
            break;
        }
    case "delRealisateur":
        {

            $listeRealisations=RealisationsManager::getListByRealisateur($p);
            // /**** Technique de suppression en cascade */
            foreach ($listeRealisations as $uneRealisation)
            {
                RealisationsManager::delete($uneRealisation);
            }
            RealisateursManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeRealisateurs");