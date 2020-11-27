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
//echo 'recherche id = 1' . '<br>';
//$p = UtilisateursManager::findById(1);
//var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . '<br>';
// $pNew = new Utilisateurs(["nomUtilisateur" => "Némarre", "prenomUtilisateur" => "Jean", "mdpUtilisateur" => "1", "emailUtilisateur" => "jeannémarredu62@gmail.com", "roleUtilisateur" => "User", "pseudoUtilisateur" => "Jean_némarre"]);
// UtilisateursManager::add($pNew);

//on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = UtilisateursManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setNomUtilisateur("némarrrrrrrre");
// UtilisateursManager::update($p);
// $pRecharge = UtilisateursManager::findById(3);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = UtilisateursManager::findById(1);
// UtilisateursManager::delete($pSuppr);

// // //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = UtilisateursManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

echo 'recherche ' . '<br>';
$p = UtilisateursManager::findBypseudo("Quentin");
var_dump($p);



