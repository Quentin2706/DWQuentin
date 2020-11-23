<?php 

function add(Article $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO article (libelleArticle, prixHt, codeBarre, idCategorie, idTva) VALUES (:libelleArticle, :prixHt, :codeBarre, :idCategorie, :idTva)");
        $q->bindValue(":libelleArticle", $obj->getLibelleArticle());
        $q->bindValue(":prixHt", $obj->getPrixHT());
		$q->bindValue(":codeBarre", $obj->getCodeBarre());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->bindValue(":idTva", $obj->getIdTVA());
        $q->execute();
    }

