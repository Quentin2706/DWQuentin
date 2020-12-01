<?php

include "../../VIEW/Head.php";
//Test GenresManager

echo "recherche id = 1" . "<br>";
$obj =GenresManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Genres(["libelleGenre" => "([value 1])", "descGenre" => "([value 2])"]);
var_dump(GenresManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = GenresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setlibelleGenre("[(Value)]");
GenresManager::update($obj);
$objUpdated = GenresManager::findById(1);
echo "Liste des objets" . "<br>";
$array = GenresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = GenresManager::findById(1);
GenresManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = GenresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

include "PHP/VIEW/Footer.php";
?>