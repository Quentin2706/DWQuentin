<?php

class ArticleManager 
{
	public static function add(Article $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Article (libelleArticle,prixHt,codeBarre,idTva,idCategorie) VALUES (:libelleArticle,:prixHt,:codeBarre,:idTva,:idCategorie)");
		$q->bindValue(":libelleArticle", $obj->getLibelleArticle());
		$q->bindValue(":prixHt", $obj->getPrixHt());
		$q->bindValue(":codeBarre", $obj->getCodeBarre());
		$q->bindValue(":idTva", $obj->getIdTva());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->execute();
	}

	public static function update(Article $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Article SET idArticle=:idArticle,libelleArticle=:libelleArticle,prixHt=:prixHt,codeBarre=:codeBarre,idTva=:idTva,idCategorie=:idCategorie WHERE idArticle=:idArticle");
		$q->bindValue(":idArticle", $obj->getIdArticle());
		$q->bindValue(":libelleArticle", $obj->getLibelleArticle());
		$q->bindValue(":prixHt", $obj->getPrixHt());
		$q->bindValue(":codeBarre", $obj->getCodeBarre());
		$q->bindValue(":idTva", $obj->getIdTva());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->execute();
	}
	public static function delete(Article $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Article WHERE idArticle=" .$obj->getIdArticle());
	}

	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Article WHERE idArticle =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Paiement($results);
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
		$q = $db->query("SELECT * FROM Article");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Article($donnees);
			}
		}
		return $liste;
	}

	static public function getlib($libelle) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE libelleArticle = :libelleArticle' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':libelleArticle', $libelle );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
    }
    
    static public function getcodeB($codeBarre) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE codeBarre = :codeBarre' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':codeBarre', $codeBarre );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
    }
    
    static public function getCateg($idCategorie) {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT idArticle, libelleArticle, prixHT, codeBarre, idCategorie, idTVA  FROM users WHERE codeBarre = :codeBarre' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':idCategorie', $idCategorie );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Article ();
		} else {
			return new Article ( $donnees );
		}
	}
}