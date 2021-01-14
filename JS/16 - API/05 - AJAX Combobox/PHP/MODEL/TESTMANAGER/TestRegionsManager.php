<?php

//Test RegionsManager

echo "recherche id = 1" . "<br>";
$obj =RegionsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Regions(["LibelleRegion" => "([value 1])"]);
var_dump(RegionsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = RegionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setLibelleRegion("[(Value)]");
RegionsManager::update($obj);
$objUpdated = RegionsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = RegionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = RegionsManager::findById(1);
RegionsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = RegionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>