<?php

class MatiereManager 
{
	public static function add(Matiere $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Matieres (libelleMatiere) VALUES (:libelleMatiere)");
		$q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}

	public static function update(Matiere $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Matieres SET idMatiere=:idMatiere,libelleMatiere=:libelleMatiere WHERE idMatiere=:idMatiere");
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}
	public static function delete(Matiere $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Matieres WHERE idMatiere=" .$obj->getIdMatiere());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Matieres WHERE idMatiere =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Matiere($results);
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
		$q = $db->query("SELECT * FROM Matieres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Matiere($donnees);
			}
		}
		return $liste;
	}
	public static function findByMatiere($matiere)
	{
		if (!in_array(";", str_split($matiere))) // s'il n'y a pas de ; , je lance la requete
        {
 		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Matieres WHERE libelleMatiere ='".$matiere."'");
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Matiere($results);
		}
		else
		{
			return false;
		}
	}
	}
}