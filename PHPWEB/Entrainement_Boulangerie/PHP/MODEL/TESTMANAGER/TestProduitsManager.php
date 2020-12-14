<?php

//Test ProduitsManager

echo "recherche id = 1" . "<br>";
$obj =ProduitsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Produits(["libelleProduit" => "([value 1])", "datePeremptionProduit" => "([value 2])", "prixProduit" => "([value 3])"]);
var_dump(ProduitsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ProduitsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setlibelleProduit("[(Value)]");
ProduitsManager::update($obj);
$objUpdated = ProduitsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ProduitsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ProduitsManager::findById(1);
ProduitsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ProduitsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>