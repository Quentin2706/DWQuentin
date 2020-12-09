<?php

class FilmsManager 
{
	public static function add(Films $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Films (nomFilm,dateFilm,coutFilm,dureeFilm,synopFilm,idStudio,idGenre) VALUES (:nomFilm,:dateFilm,:coutFilm,:dureeFilm,:synopFilm,:idStudio,:idGenre)");
		$q->bindValue(":nomFilm", $obj->getNomFilm());
		$q->bindValue(":dateFilm", $obj->getDateFilm());
		$q->bindValue(":coutFilm", $obj->getCoutFilm());
		$q->bindValue(":dureeFilm", $obj->getDureeFilm());
		$q->bindValue(":synopFilm", $obj->getSynopFilm());
		$q->bindValue(":idStudio", $obj->getIdStudio());
		$q->bindValue(":idGenre", $obj->getIdGenre());
		$q->execute();
	}

	public static function update(Films $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Films SET idFilm=:idFilm,nomFilm=:nomFilm,dateFilm=:dateFilm,coutFilm=:coutFilm,dureeFilm=:dureeFilm,synopFilm=:synopFilm,idStudio=:idStudio,idGenre=:idGenre WHERE idFilm=:idFilm");
		$q->bindValue(":idFilm", $obj->getIdFilm());
		$q->bindValue(":nomFilm", $obj->getNomFilm());
		$q->bindValue(":dateFilm", $obj->getDateFilm());
		$q->bindValue(":coutFilm", $obj->getCoutFilm());
		$q->bindValue(":dureeFilm", $obj->getDureeFilm());
		$q->bindValue(":synopFilm", $obj->getSynopFilm());
		$q->bindValue(":idStudio", $obj->getIdStudio());
		$q->bindValue(":idGenre", $obj->getIdGenre());
		$q->execute();
	}
	public static function delete(Films $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Films WHERE idFilm=" .$obj->getIdFilm());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Films WHERE idFilm =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Films($results);
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
		$q = $db->query("SELECT * FROM Films");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Films($donnees);
			}
		}
		return $liste;
	}
}