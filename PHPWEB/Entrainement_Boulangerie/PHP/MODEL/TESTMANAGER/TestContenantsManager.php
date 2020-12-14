<?php

//Test ContenantsManager

echo "recherche id = 1" . "<br>";
$obj =ContenantsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Contenants(["idProduit" => "([value 1])", "idIngredient" => "([value 2])"]);
var_dump(ContenantsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ContenantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidProduit("[(Value)]");
ContenantsManager::update($obj);
$objUpdated = ContenantsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ContenantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ContenantsManager::findById(1);
ContenantsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ContenantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>