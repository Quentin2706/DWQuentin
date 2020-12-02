<?php

class RealisationsManager 
{
	public static function add(Realisations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Realisations (idRealisateur,idFilm,dateDebutRealisation,dateFinRealisation) VALUES (:idRealisateur,:idFilm,:dateDebutRealisation,:dateFinRealisation)");
		$q->bindValue(":idRealisateur", $obj->getIdRealisateur());
		$q->bindValue(":idFilm", $obj->getIdFilm());
		$q->bindValue(":dateDebutRealisation", $obj->getDateDebutRealisation());
		$q->bindValue(":dateFinRealisation", $obj->getDateFinRealisation());
		$q->execute();
	}

	public static function update(Realisations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Realisations SET idRealisation=:idRealisation,idRealisateur=:idRealisateur,idFilm=:idFilm,dateDebutRealisation=:dateDebutRealisation,dateFinRealisation=:dateFinRealisation WHERE idRealisation=:idRealisation");
		$q->bindValue(":idRealisation", $obj->getIdRealisation());
		$q->bindValue(":idRealisateur", $obj->getIdRealisateur());
		$q->bindValue(":idFilm", $obj->getIdFilm());
		$q->bindValue(":dateDebutRealisation", $obj->getDateDebutRealisation());
		$q->bindValue(":dateFinRealisation", $obj->getDateFinRealisation());
		$q->execute();
	}
	public static function delete(Realisations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Realisations WHERE idRealisation=" .$obj->getIdRealisation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Realisations WHERE idRealisation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Realisations($results);
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
		$q = $db->query("SELECT * FROM Realisations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Realisations($donnees);
			}
		}
		return $liste;
	}
}