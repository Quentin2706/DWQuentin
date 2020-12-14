<?php

class ContenantsManager 
{
	public static function add(Contenants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Contenants (idProduit,idIngredient) VALUES (:idProduit,:idIngredient)");
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idIngredient", $obj->getIdIngredient());
		$q->execute();
	}

	public static function update(Contenants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Contenants SET idContenant=:idContenant,idProduit=:idProduit,idIngredient=:idIngredient WHERE idContenant=:idContenant");
		$q->bindValue(":idContenant", $obj->getIdContenant());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idIngredient", $obj->getIdIngredient());
		$q->execute();
	}
	public static function delete(Contenants $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Contenants WHERE idContenant=" .$obj->getIdContenant());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Contenants WHERE idContenant =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Contenants($results);
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
		$q = $db->query("SELECT * FROM Contenants");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Contenants($donnees);
			}
		}
		return $liste;
	}
}