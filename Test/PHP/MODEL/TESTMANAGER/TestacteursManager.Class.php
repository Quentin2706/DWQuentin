<?php

include "../../VIEW/Head.php";
//Test ActeursManager

echo "recherche id = 1" . "<br>";
$obj =ActeursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Acteurs(["nomActeur" => "([value 1])", "prenomActeur" => "([value 2])", "origineActeur" => "([value 3])", "dateDeNaissanceActeur" => "([value 4])"]);
var_dump(ActeursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ActeursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomActeur("[(Value)]");
ActeursManager::update($obj);
$objUpdated = ActeursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ActeursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ActeursManager::findById(1);
ActeursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ActeursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

include "PHP/VIEW/Footer.php";
?>