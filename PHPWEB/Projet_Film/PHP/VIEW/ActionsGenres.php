<?php
var_dump($_POST);
$p = new Genres($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutGenre":
        {
            GenresManager::add($p);
            break;
        }
    case "modifGenre":
        {   
            GenresManager::update($p);
            break;
        }
    case "delGenre":
        {
            /************************* Réaffectation des films en genre par défaut ************************/

            //On récupère tout les films lié au genres
            $listeFilms=FilmsManager::getListByGenre($p);
            foreach($listeFilms as $unFilm){
                FilmsManager::updateGenreDefault($unFilm);
            }
            GenresManager::delete($p);
            
            /************************* SUPPRESSION GLOBALE ************************/
            // //On récupère tout les film lié au genres
            // $listeFilms=FilmsManager::getListByGenre($p);
            // /**** Technique de suppression en cascade */
            // foreach ($listeFilms as $unFilm)
            // {
            
            //     //On récupère toutes les Participations lié au film
            //     $listeParticipations=ParticipationsManager::getListByFilm($unFilm);
            //     foreach($listeParticipations as $uneParticipation){
            //         ParticipationsManager::delete($uneParticipation);
            //     }
            //     //On récupère toutes les Réalisation lié au film
            //     $listeRealisation=RealisationsManager::getListByFilm($unFilm);
            //     foreach($listeRealisation as $uneRealisation){
            //         RealisationsManager::delete($uneRealisation);
            //     }
            //     FilmsManager::delete($unFilm);
            // }
            // GenresManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeGenres");