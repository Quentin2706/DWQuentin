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

//***************   Test Studio  *****************/

/* Test Manager */

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = StudiosManager::findById(1);
var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Studios(["nomStudio" => "dadfa", "paysStudio" => "dazd", "fondateurStudio" => "adaz","creationStudio" => "1943-04-04"]);
// StudiosManager::add($pNew);

//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = StudiosManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setNomStudio($p->getNomStudio() . 'sss');
// StudiosManager::update($p);
// $pRecharge = StudiosManager::findById(1);
// var_dump($pRecharge);

// on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = StudiosManager::findById(3);
StudiosManager::delete($pSuppr);

// //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }


