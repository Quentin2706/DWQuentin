<?php

include "../../VIEW/Head.php";
//Test ParticipationsManager

echo "recherche id = 1" . "<br>";
$obj =ParticipationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Participations(["idActeur" => "([value 1])", "idFilm" => "([value 2])"]);
var_dump(ParticipationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ParticipationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidActeur("[(Value)]");
ParticipationsManager::update($obj);
$objUpdated = ParticipationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ParticipationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ParticipationsManager::findById(1);
ParticipationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ParticipationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

include "PHP/VIEW/Footer.php";
?>