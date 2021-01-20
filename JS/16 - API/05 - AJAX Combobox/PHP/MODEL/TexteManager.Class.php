<?php

class TexteManager
{
	public static function add(Texte $obj)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Texte (codeTexte,codeLangue,Texte) VALUES (:codeTexte,:codeLangue,:texte)");
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":texte", $obj->getTexte());
		$q->execute();
	}
	public static function update(Texte $obj)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Texte SET idTexte=:idTexte,codeTexte=:codeTexte,codeLangue=:codeLangue,texte=:texte WHERE idTexte=:idTexte");
		$q->bindValue(":idTexte", $obj->getIdTexte());
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":texte", $obj->getTexte());
		$q->execute();
	}

	public static function delete(Texte $obj)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Texte SET idTexte=:idTexte,codeTexte=:codeTexte,codeLangue=:codeLangue,texte=:texte WHERE idTexte=:idTexte");
		$db->exec("DELETE FROM Texte WHERE idTexte=" .$obj->getIdTexte());
	}

	public static function findById($id)
	{
		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Texte WHERE idTexte =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Texte($results);
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
		$q = $db->query("SELECT * FROM Texte");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Texte($donnees);
			}
		}
		return $liste;
	}

	public static function findByCodes($codeLangue,$codeTexte)

	{
		$db=DbConnect::getDb();
		$q=$db->prepare("SELECT texte FROM Traductions WHERE codeTexte =:codeTexte and codeLangue = :codeLangue");
		$q->bindValue(":codeTexte", $codeTexte,PDO::PARAM_STR);
		$q->bindValue(":codeLangue", $codeLangue,PDO::PARAM_STR);
		$q->execute();
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return $results['texte'];  // on ne retourne que le texte, pas un objet
		}
		else
		{
			return false;
		}
	}
}