<?php

//Test RealisateursManager

echo "recherche id = 1" . "<br>";
$obj =RealisateursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Realisateurs(["nomRealisateur" => "([value 1])", "prenomRealisateur" => "([value 2])", "dateDeNaissanceRealisateur" => "([value 3])", "paysOrigineRealisateur" => "([value 4])"]);
var_dump(RealisateursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = RealisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomRealisateur("[(Value)]");
RealisateursManager::update($obj);
$objUpdated = RealisateursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = RealisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = RealisateursManager::findById(1);
RealisateursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = RealisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>