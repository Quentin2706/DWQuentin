<?php

class ModulesManager 
{
	public static function add(Modules $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Modules (nomModule,coefficientModule) VALUES (:nomModule,:coefficientModule)");
		$q->bindValue(":idModule", $obj->getIdModule());
		$q->bindValue(":nomModule", $obj->getNomModule());
		$q->bindValue(":coefficientModule", $obj->getCoefficientModule());
		$q->execute();
	}

	public static function update(Modules $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Modules SET nomModule=:nomModule,coefficientModule=:coefficientModule WHERE idModule=:idModule");
		$q->bindValue(":nomModule", $obj->getNomModule());
		$q->bindValue(":coefficientModule", $obj->getCoefficientModule());
		$q->execute();
	}
	public static function delete(Modules $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Modules WHERE idModule=" .$obj->getIdModule());
	}
}