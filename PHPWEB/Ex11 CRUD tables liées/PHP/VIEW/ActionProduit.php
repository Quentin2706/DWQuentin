<?php
var_dump($_POST);
$p = new Produits($_POST);
var_dump($p);
switch ($_GET['mode']) {
    case "ajoutProduit":
        {
            ProduitsManager::add($p);
            break;
        }
    case "modifProduit":
        {
            ProduitsManager::update($p);
            break;
        }
    case "delProduit":
        {
            ProduitsManager::delete($p);
            break;
        }
}

header("location:index.php?codePage=listeProduit");