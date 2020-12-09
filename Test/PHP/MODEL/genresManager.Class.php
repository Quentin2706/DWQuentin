<?php

class GenresManager 
{
	public static function add(Genres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Genres (libelleGenre,descGenre) VALUES (:libelleGenre,:descGenre)");
		$q->bindValue(":libelleGenre", $obj->getLibelleGenre());
		$q->bindValue(":descGenre", $obj->getDescGenre());
		$q->execute();
	}

	public static function update(Genres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Genres SET idGenre=:idGenre,libelleGenre=:libelleGenre,descGenre=:descGenre WHERE idGenre=:idGenre");
		$q->bindValue(":idGenre", $obj->getIdGenre());
		$q->bindValue(":libelleGenre", $obj->getLibelleGenre());
		$q->bindValue(":descGenre", $obj->getDescGenre());
		$q->execute();
	}
	public static function delete(Genres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Genres WHERE idGenre=" .$obj->getIdGenre());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Genres WHERE idGenre =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Genres($results);
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
		$q = $db->query("SELECT * FROM Genres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Genres($donnees);
			}
		}
		return $liste;
	}
}