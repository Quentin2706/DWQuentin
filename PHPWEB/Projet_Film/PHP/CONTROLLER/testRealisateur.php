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
// $p = RealisateursManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Realisateurs(["nomRealisateur" => "Gerald", "prenomRealisateur" => "Richtofen", "dateDeNaissanceRealisateur" => "2002-06-27", "paysOrigineRealisateur" => "zimbabwé"]);
// RealisateursManager::add($pNew);

// on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = RealisateursManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setDateDeNaissanceRealisateur("2012-12-01");
// RealisateursManager::update($p);
// $pRecharge = RealisateursManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = RealisateursManager::findById(3);
// RealisateursManager::delete($pSuppr);

// // //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = RealisateursManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }


