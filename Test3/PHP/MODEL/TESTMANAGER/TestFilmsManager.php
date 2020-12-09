<?php

//Test FilmsManager

echo "recherche id = 1" . "<br>";
$obj =FilmsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Films(["nomFilm" => "([value 1])", "dateFilm" => "([value 2])", "coutFilm" => "([value 3])", "dureeFilm" => "([value 4])", "synopFilm" => "([value 5])", "idStudio" => "([value 6])", "idGenre" => "([value 7])"]);
var_dump(FilmsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = FilmsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomFilm("[(Value)]");
FilmsManager::update($obj);
$objUpdated = FilmsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = FilmsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = FilmsManager::findById(1);
FilmsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = FilmsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>