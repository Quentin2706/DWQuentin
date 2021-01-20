<?php

class RegionsManager 
{
	public static function add(Regions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Regions (LibelleRegion) VALUES (:LibelleRegion)");
		$q->bindValue(":LibelleRegion", $obj->getLibelleRegion());
		$q->execute();
	}

	public static function update(Regions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Regions SET idRegion=:idRegion,LibelleRegion=:LibelleRegion WHERE idRegion=:idRegion");
		$q->bindValue(":idRegion", $obj->getIdRegion());
		$q->bindValue(":LibelleRegion", $obj->getLibelleRegion());
		$q->execute();
	}
	public static function delete(Regions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Regions WHERE idRegion=" .$obj->getIdRegion());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Regions WHERE idRegion =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Regions($results);
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
		$q = $db->query("SELECT * FROM Regions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Regions($donnees);
			}
		}
		return $liste;
	}
	
	public static function getListAPI()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Regions ORDER BY LibelleRegion");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$json[] = $donnees;
			}
		}
		return $json;
	}
}