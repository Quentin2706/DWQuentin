<?php

class IngredientsManager 
{
	public static function add(Ingredients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Ingredients (libelleIngredient) VALUES (:libelleIngredient)");
		$q->bindValue(":libelleIngredient", $obj->getLibelleIngredient());
		$q->execute();
	}

	public static function update(Ingredients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Ingredients SET idIngredient=:idIngredient,libelleIngredient=:libelleIngredient WHERE idIngredient=:idIngredient");
		$q->bindValue(":idIngredient", $obj->getIdIngredient());
		$q->bindValue(":libelleIngredient", $obj->getLibelleIngredient());
		$q->execute();
	}
	public static function delete(Ingredients $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Ingredients WHERE idIngredient=" .$obj->getIdIngredient());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Ingredients WHERE idIngredient =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Ingredients($results);
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
		$q = $db->query("SELECT * FROM Ingredients");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Ingredients($donnees);
			}
		}
		return $liste;
	}
}