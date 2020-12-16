<?php

class SuiviManager 
{
	public static function add(Suivi $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Suivis (note,coefficient,idEleve,idMatiere) VALUES (:note,:coefficient,:idEleve,:idMatiere)");
		$q->bindValue(":note", $obj->getNote());
		$q->bindValue(":coefficient", $obj->getCoefficient());
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->execute();
	}

	public static function update(Suivi $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Suivis SET idSuivi=:idSuivi,note=:note,coefficient=:coefficient,idEleve=:idEleve,idMatiere=:idMatiere WHERE idSuivi=:idSuivi");
		$q->bindValue(":idSuivi", $obj->getIdSuivi());
		$q->bindValue(":note", $obj->getNote());
		$q->bindValue(":coefficient", $obj->getCoefficient());
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->execute();
	}
	public static function delete(Suivi $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Suivis WHERE idSuivi=" .$obj->getIdSuivi());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Suivis WHERE idSuivi =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivi($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
	}
	public static function getByMatiere($matiere)
	{

 		$db=DbConnect::getDb();
		$liste = [];
		$matiere = (int) $matiere;
		$q = $db->query("SELECT * FROM Suivis WHERE idMatiere='".$matiere."'");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
	}
	public static function getByEleve($eleve)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$eleve = (int) $eleve;
		$q = $db->query("SELECT * FROM Suivis WHERE idEleve=".$eleve);
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
	}
}