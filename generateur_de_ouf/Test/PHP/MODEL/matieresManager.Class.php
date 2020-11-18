<?php

class MatieresManager 
{
	public static function add(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Matieres (nomMatiere,idModule,coefficientMatiere) VALUES (:nomMatiere,:idModule,:coefficientMatiere)");
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":nomMatiere", $obj->getNomMatiere());
		$q->bindValue(":idModule", $obj->getIdModule());
		$q->bindValue(":coefficientMatiere", $obj->getCoefficientMatiere());
		$q->execute();
	}

	public static function update(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Matieres SET nomMatiere=:nomMatiere,idModule=:idModule,coefficientMatiere=:coefficientMatiere WHERE idMatiere=:idMatiere");
		$q->bindValue(":nomMatiere", $obj->getNomMatiere());
		$q->bindValue(":idModule", $obj->getIdModule());
		$q->bindValue(":coefficientMatiere", $obj->getCoefficientMatiere());
		$q->execute();
	}
	public static function delete(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Matieres WHERE idMatiere=" .$obj->getIdMatiere());
	}
}