<?php

$page = $_GET['traitement'];

if ($page == "add") {
    $p = new Produits($_POST);
    $p->setDateDePeremption($_POST['dateDePeremption']);
    produitsManager::add($p);
} else if ($page == "update") {
    $id = $_POST['idProduit'];
    $p = ProduitsManager::findById($id);
    $p = new Produits($_POST);
    $p->setDateDePeremption($_POST['dateDePeremption']);
    produitsManager::update($p);
} else if ($page == "delete") {
    $idRecherche = $_GET['id'];
    $supp = produitsManager::findById($idRecherche);
    produitsManager::delete($supp);
}

header('Location:./index.php');
