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

//***************   Test participation  *****************/

/* Test Manager */

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ParticipationsManager::findById(1);
var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Participations(["idActeur" => 1, "idFilm" => 1]);
// ParticipationsManager::add($pNew);

//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = ParticipationsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setIdActeur(2);
// ParticipationsManager::update($p);
// $pRecharge = ParticipationsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = ParticipationsManager::findById(3);
// ParticipationsManager::delete($pSuppr);

// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }


