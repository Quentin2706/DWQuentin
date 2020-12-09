<?php

//Test UtilisateursManager

echo "recherche id = 1" . "<br>";
$obj =UtilisateursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Utilisateurs(["nomUtilisateur" => "([value 1])", "prenomUtilisateur" => "([value 2])", "mdpUtilisateur" => "([value 3])", "emailUtilisateur" => "([value 4])", "roleUtilisateur" => "([value 5])", "pseudoUtilisateur" => "([value 6])"]);
var_dump(UtilisateursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = UtilisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomUtilisateur("[(Value)]");
UtilisateursManager::update($obj);
$objUpdated = UtilisateursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = UtilisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = UtilisateursManager::findById(1);
UtilisateursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = UtilisateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>