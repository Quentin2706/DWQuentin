<?php

//Test IngredientsManager

echo "recherche id = 1" . "<br>";
$obj =IngredientsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Ingredients(["libelleIngredient" => "([value 1])"]);
var_dump(IngredientsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = IngredientsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setlibelleIngredient("[(Value)]");
IngredientsManager::update($obj);
$objUpdated = IngredientsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = IngredientsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = IngredientsManager::findById(1);
IngredientsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = IngredientsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>