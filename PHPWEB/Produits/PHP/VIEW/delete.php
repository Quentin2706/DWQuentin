<?php 

include('./head.php');

$idRecherche = $_GET['id'];

$supp = produitsManager::findById($idRecherche);
produitsManager::delete($supp);

header('Location:../../index.php');