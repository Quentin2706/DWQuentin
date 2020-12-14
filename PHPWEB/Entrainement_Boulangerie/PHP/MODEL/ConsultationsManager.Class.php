<?php

class ConsultationsManager 
{
	public static function add(Consultations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Consultations (idUser,idProduit) VALUES (:idUser,:idProduit)");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->execute();
	}

	public static function update(Consultations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Consultations SET idConsultation=:idConsultation,idUser=:idUser,idProduit=:idProduit WHERE idConsultation=:idConsultation");
		$q->bindValue(":idConsultation", $obj->getIdConsultation());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->execute();
	}
	public static function delete(Consultations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Consultations WHERE idConsultation=" .$obj->getIdConsultation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Consultations WHERE idConsultation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Consultations($results);
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
		$q = $db->query("SELECT * FROM Consultations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Consultations($donnees);
			}
		}
		return $liste;
	}
}