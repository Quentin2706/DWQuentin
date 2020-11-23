<?php 

$art = new Articles()

function add(Article $obj)
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
    
    