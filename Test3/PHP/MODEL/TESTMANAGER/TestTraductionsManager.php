<?php

//Test TraductionsManager

echo "recherche id = 1" . "<br>";
$obj =TraductionsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Traductions(["codeTexte" => "([value 1])", "codeLangue" => "([value 2])", "Texte" => "([value 3])"]);
var_dump(TraductionsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = TraductionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setcodeTexte("[(Value)]");
TraductionsManager::update($obj);
$objUpdated = TraductionsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = TraductionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = TraductionsManager::findById(1);
TraductionsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = TraductionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>