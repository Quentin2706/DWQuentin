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

//***************   Test Genres  *****************/

/* Test Manager */

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ActeursManager::findById(1);
var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Acteurs(["nomActeur" => "jhdiau", "prenomActeur" => "kdoa", "origineActeur" => "zrzef", "dateDeNaissanceActeur" => "1974-01-30"]);
// ActeursManager::add($pNew);

// //on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = ActeursManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setNomActeur($p->getNomActeur() . 'sss');
// ActeursManager::update($p);
// $pRecharge = ActeursManager::findById(1);
// var_dump($pRecharge);

// on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = ActeursManager::findById(7);
ActeursManager::delete($pSuppr);

//on affiche la liste des produits
echo "liste des articles" . '<br>';
$tableau = ActeursManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}


