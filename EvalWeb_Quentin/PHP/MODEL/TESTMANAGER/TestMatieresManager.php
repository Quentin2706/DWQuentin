<?php

//Test MatiereManager

// echo "recherche id = 1" . "<br>";
// $obj =MatiereManager::findById(1);
// var_dump($obj);
// echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Matiere(["libelleMatiere" => "test"]);
// var_dump(MatiereManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = MatiereManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setlibelleMatiere("[(Value)]");
// MatiereManager::update($obj);
// $objUpdated = MatiereManager::findById(1);
// echo "Liste des objets" . "<br>";
// $array = MatiereManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = MatiereManager::findById(5);
// MatiereManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = MatiereManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }
$matiere = "maths";
$matiere = MatiereManager::findByMatiere($matiere);
var_dump($matiere);
?>