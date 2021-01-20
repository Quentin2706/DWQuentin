<?php

//Test DepartementsManager

echo "recherche id = 1" . "<br>";
$obj =DepartementsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Departements(["LibelleDepartement" => "([value 1])", "IdRegion" => "([value 2])"]);
var_dump(DepartementsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = DepartementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setLibelleDepartement("[(Value)]");
DepartementsManager::update($obj);
$objUpdated = DepartementsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = DepartementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = DepartementsManager::findById(1);
DepartementsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = DepartementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>