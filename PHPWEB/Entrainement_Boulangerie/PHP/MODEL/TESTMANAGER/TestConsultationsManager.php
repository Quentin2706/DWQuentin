<?php

//Test ConsultationsManager

echo "recherche id = 1" . "<br>";
$obj =ConsultationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Consultations(["idUser" => "([value 1])", "idProduit" => "([value 2])"]);
var_dump(ConsultationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ConsultationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidUser("[(Value)]");
ConsultationsManager::update($obj);
$objUpdated = ConsultationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ConsultationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ConsultationsManager::findById(1);
ConsultationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ConsultationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>