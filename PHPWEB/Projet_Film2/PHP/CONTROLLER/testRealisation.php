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

/* Test Manager */

// on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = RealisationsManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Realisations(["idRealisateur" => 1, "idFilm" => 1, "dateDebutRealisation" => "1999-06-27", "dateFinRealisation" => "2002-06-27"]);
// RealisationsManager::add($pNew);

//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = RealisationsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setDateDebutRealisation("2012-12-01");
// RealisationsManager::update($p);
// $pRecharge = RealisationsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = RealisationsManager::findById(2);
// RealisationsManager::delete($pSuppr);

// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = RealisationsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }


echo 'recherche id = 1' . '<br>';
$p = TexteManager::findByCodes("ENG", "sousTitreHeader");
var_dump($p);
