<?php

include "../../VIEW/Head.php";
//Test StudiosManager

echo "recherche id = 1" . "<br>";
$obj =StudiosManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Studios(["nomStudio" => "([value 1])", "paysStudio" => "([value 2])", "fondateurStudio" => "([value 3])", "creationStudio" => "([value 4])"]);
var_dump(StudiosManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StudiosManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomStudio("[(Value)]");
StudiosManager::update($obj);
$objUpdated = StudiosManager::findById(1);
echo "Liste des objets" . "<br>";
$array = StudiosManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = StudiosManager::findById(1);
StudiosManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = StudiosManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

include "PHP/VIEW/Footer.php";
?>