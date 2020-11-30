<?php
var_dump($_POST);
$p = new Acteurs($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutActeur":
        {
            ActeursManager::add($p);
            break;
        }
    case "modifActeur":
        {   
            ActeursManager::update($p);
            break;
        }
    case "delActeur":
        {
            //On récupère toutes les participations de l'acteur
            $listeParticipations=ParticipationsManager::getListByActeur($p);
            /**** Technique de suppression en cascade */
            foreach ($listeParticipations as $uneParticipation)
            {
                ParticipationsManager::delete($uneParticipation);
            }
            ActeursManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeActeurs");