<?php

class UsersManager 
{
	public static function add(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Users (nomUser,prenomUser,pseudoUser,mdpUser,adresseMailUser,roleUser) VALUES (:nomUser,:prenomUser,:pseudoUser,:mdpUser,:adresseMailUser,:roleUser)");
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":pseudoUser", $obj->getPseudoUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":adresseMailUser", $obj->getAdresseMailUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->execute();
	}

	public static function update(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Users SET idUser=:idUser,nomUser=:nomUser,prenomUser=:prenomUser,pseudoUser=:pseudoUser,mdpUser=:mdpUser,adresseMailUser=:adresseMailUser,roleUser=:roleUser WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":pseudoUser", $obj->getPseudoUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":adresseMailUser", $obj->getAdresseMailUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->execute();
	}
	public static function delete(Users $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Users WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Users WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Users($results);
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
		$q = $db->query("SELECT * FROM Users");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Users($donnees);
			}
		}
		return $liste;
	}
}