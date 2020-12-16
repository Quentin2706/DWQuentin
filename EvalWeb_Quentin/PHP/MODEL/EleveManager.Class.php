<?php

class EleveManager 
{
	public static function add(Eleve $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Eleves (nomEleve,prenomEleve,Classe) VALUES (:nomEleve,:prenomEleve,:Classe)");
		$q->bindValue(":nomEleve", $obj->getNomEleve());
		$q->bindValue(":prenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":Classe", $obj->getClasse());
		$q->execute();
	}

	public static function update(Eleve $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Eleves SET idEleve=:idEleve,nomEleve=:nomEleve,prenomEleve=:prenomEleve,Classe=:Classe WHERE idEleve=:idEleve");
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":nomEleve", $obj->getNomEleve());
		$q->bindValue(":prenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":Classe", $obj->getClasse());
		$q->execute();
	}
	public static function delete(Eleve $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Eleves WHERE idEleve=" .$obj->getIdEleve());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Eleves WHERE idEleve =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Eleve($results);
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
		$q = $db->query("SELECT * FROM Eleves");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Eleve($donnees);
			}
		}
		return $liste;
	}
}