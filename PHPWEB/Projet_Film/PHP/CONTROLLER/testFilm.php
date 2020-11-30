<?php
function ChargerClasse($classe)
{
    if (file_exists("./" . $classe . ".Class.php"))
    {
        require "./" . $classe . ".Class.php";
    }
    if (file_exists("../MODEL/" . $classe . ".Class.php"))
    {	
        require "../MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

//on active la connexion à la base de données
DbConnect::init();

//***************   Test Film  *****************/

/* Test Manager */

// on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = FilmsManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un Film" . '<br>';
// $pNew = new Films(["nomFilm" => "NomduFilmici", "dateFilm" => "2000-06-27", "coutFilm" => 123456789, "dureeFilm" => 139, "synopFilm" => "Ici c'est le synopsis du film", "idStudio" => 1, "idGenre" => 1]);
// FilmsManager::add($pNew);

//on affiche la liste des Films
// echo "Liste des articles" . '<br>';
// $tableau = FilmsManager::getList();
// foreach ($tableau as $unFilm)
// {
//     echo $unFilm->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setnomFilm($p->getnomFilm() . 'sss');
// FilmsManager::update($p);
// $pRecharge = FilmsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = FilmsManager::findById(3);
// FilmsManager::delete($pSuppr);

// //on affiche la liste des Films
// echo "liste des articles" . '<br>';
// $tableau = FilmsManager::getList();
// foreach ($tableau as $unFilm)
// {
//     echo $unFilm->toString() . '<br>';
// }


