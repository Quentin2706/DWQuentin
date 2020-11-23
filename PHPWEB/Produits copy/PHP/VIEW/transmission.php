<?php

$page = $_GET['traitement'];

if ($page == "add") {
    $p = new Produits(["libelleProduit" => $_POST['nom'], "prix" => intval($_POST['prix']), "dateDePeremption" => $_POST['date']]);
    produitsManager::add($p);
} else if ($page == "update") {
    $id = intval($_POST['id']);
    $p = ProduitsManager::findById($id);
    $p->setLibelleProduit($_POST['nom']);
    $p->setPrix(intval($_POST['prix']));
    $p->setDateDePeremption($_POST['date']);
    produitsManager::update($p);
} else if ($page == "delete") {
    $idRecherche = $_GET['id'];
    $supp = produitsManager::findById($idRecherche);
    produitsManager::delete($supp);
}

header('Location:./index.php');
