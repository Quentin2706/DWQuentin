<?php
var_dump($_POST);
$p = new Studios($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutStudio":
        {
            StudiosManager::add($p);
            break;
        }
    case "modifStudio":
        {   
            StudiosManager::update($p);
            break;
        }
    case "delStudio":
        {
            //On récupère tout les films lié au studio
            $listeFilms=FilmsManager::getListByStudio($p);
            foreach($listeFilms as $unFilm){
                FilmsManager::updateStudioDefault($unFilm);
            }
            StudiosManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeActeurs");