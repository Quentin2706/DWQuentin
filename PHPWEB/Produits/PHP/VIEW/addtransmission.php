<?php

include('head.php');

$p = new Produits (["libelleProduit" =>  $_GET['nom'] , "prix" => intval($_GET['prix']), "dateDePeremption" => $_GET['date']]);
produitsManager::add($p);
header('Location:../../index.php');