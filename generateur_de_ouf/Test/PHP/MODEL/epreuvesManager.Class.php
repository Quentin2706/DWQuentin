<?php

class EpreuvesManager 
{
	public static function add(Epreuves $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Epreuves (libelleEpreuve,idEnseignantEpreuve,idMatiereEpreuve,dateEpreuve,CoefficientEpreuve,anneeEpreuve) VALUES (:libelleEpreuve,:idEnseignantEpreuve,:idMatiereEpreuve,:dateEpreuve,:CoefficientEpreuve,:anneeEpreuve)");
		$q->bindValue(":idEpreuve", $obj->getIdEpreuve());
		$q->bindValue(":libelleEpreuve", $obj->getLibelleEpreuve());
		$q->bindValue(":idEnseignantEpreuve", $obj->getIdEnseignantEpreuve());
		$q->bindValue(":idMatiereEpreuve", $obj->getIdMatiereEpreuve());
		$q->bindValue(":dateEpreuve", $obj->getDateEpreuve());
		$q->bindValue(":CoefficientEpreuve", $obj->getCoefficientEpreuve());
		$q->bindValue(":anneeEpreuve", $obj->getAnneeEpreuve());
		$q->execute();
	}

	public static function update(Epreuves $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Epreuves SET libelleEpreuve=:libelleEpreuve,idEnseignantEpreuve=:idEnseignantEpreuve,idMatiereEpreuve=:idMatiereEpreuve,dateEpreuve=:dateEpreuve,CoefficientEpreuve=:CoefficientEpreuve,anneeEpreuve=:anneeEpreuve WHERE idEpreuve=:idEpreuve");
		$q->bindValue(":libelleEpreuve", $obj->getLibelleEpreuve());
		$q->bindValue(":idEnseignantEpreuve", $obj->getIdEnseignantEpreuve());
		$q->bindValue(":idMatiereEpreuve", $obj->getIdMatiereEpreuve());
		$q->bindValue(":dateEpreuve", $obj->getDateEpreuve());
		$q->bindValue(":CoefficientEpreuve", $obj->getCoefficientEpreuve());
		$q->bindValue(":anneeEpreuve", $obj->getAnneeEpreuve());
		$q->execute();
	}
	public static function delete(Epreuves $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Epreuves WHERE idEpreuve=" .$obj->getIdEpreuve());
	}
}