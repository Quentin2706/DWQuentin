<?php

include 'head.php';

$id = intval($_GET['id']);
$p = ProduitsManager::findById($id);
$p -> setLibelleProduit($_GET['nom']);
$p -> setPrix(intval($_GET['prix']));
$p -> setDateDePeremption($_GET['date']);
ProduitsManager::update($p);

header('Location:../../index.php');