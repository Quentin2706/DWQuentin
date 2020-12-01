<?php

include "../../VIEW/Head.php";
//Test RealisationsManager

echo "recherche id = 1" . "<br>";
$obj =RealisationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Realisations(["idRealisateur" => "([value 1])", "idFilm" => "([value 2])", "dateDebutRealisation" => "([value 3])", "dateFinRealisation" => "([value 4])"]);
var_dump(RealisationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = RealisationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidRealisateur("[(Value)]");
RealisationsManager::update($obj);
$objUpdated = RealisationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = RealisationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = RealisationsManager::findById(1);
RealisationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = RealisationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

include "PHP/VIEW/Footer.php";
?>