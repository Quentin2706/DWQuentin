<?php

include('head.php');

$id = intval($_GET['id']);
$p = ProduitsManager::findById($id);
var_dump($p);
$p -> setLibelleProduit($_GET['nom']);
$p -> setPrix(intval($_GET['prix']));
$p -> setDateDePeremption($_GET['date']);
var_dump($p);
var_dump(ProduitsManager::update($p));

header('Location:../../index.php');