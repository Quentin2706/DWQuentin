<?php

class Faire_coursManager 
{
	public static function add(Faire_cours $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Faire_cours (idEnseignant,idMatiere,annee) VALUES (:idEnseignant,:idMatiere,:annee)");
		$q->bindValue(":idFaireCours", $obj->getIdFaireCours());
		$q->bindValue(":idEnseignant", $obj->getIdEnseignant());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":annee", $obj->getAnnee());
		$q->execute();
	}

	public static function update(Faire_cours $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Faire_cours SET idEnseignant=:idEnseignant,idMatiere=:idMatiere,annee=:annee WHERE idFaireCours=:idFaireCours");
		$q->bindValue(":idEnseignant", $obj->getIdEnseignant());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":annee", $obj->getAnnee());
		$q->execute();
	}
	public static function delete(Faire_cours $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Faire_cours WHERE idFaireCours=" .$obj->getIdFaireCours());
	}
}