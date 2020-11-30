<?php
var_dump($_POST);
$p = new Films($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutFilm":
        {
            FilmsManager::add($p);
            break;
        }
    case "modifFilm":
        {   
            FilmsManager::update($p);
            break;
        }
    case "delFilm":
        {
            
            $listeParticipations=ParticipationsManager::getListByFilm($p);
            // /**** Technique de suppression en cascade */
            foreach ($listeParticipations as $uneParticipation)
            {
                ParticipationsManager::delete($uneParticipation);
            }
            $listeRealisations=RealisationsManager::getListByFilm($p);
            foreach ($listeRealisations as $uneRealisation)
            {
                RealisationsManager::delete($uneRealisation);
            }
            FilmsManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeFilms");