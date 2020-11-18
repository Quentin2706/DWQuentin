<?php

class Avoir_noteManager 
{
	public static function add(Avoir_note $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Avoir_note (idEtudiant,idEpreuve,note) VALUES (:idEtudiant,:idEpreuve,:note)");
		$q->bindValue(":idAvoirNote", $obj->getIdAvoirNote());
		$q->bindValue(":idEtudiant", $obj->getIdEtudiant());
		$q->bindValue(":idEpreuve", $obj->getIdEpreuve());
		$q->bindValue(":note", $obj->getNote());
		$q->execute();
	}

	public static function update(Avoir_note $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Avoir_note SET idEtudiant=:idEtudiant,idEpreuve=:idEpreuve,note=:note WHERE idAvoirNote=:idAvoirNote");
		$q->bindValue(":idEtudiant", $obj->getIdEtudiant());
		$q->bindValue(":idEpreuve", $obj->getIdEpreuve());
		$q->bindValue(":note", $obj->getNote());
		$q->execute();
	}
	public static function delete(Avoir_note $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Avoir_note WHERE idAvoirNote=" .$obj->getIdAvoirNote());
	}
}