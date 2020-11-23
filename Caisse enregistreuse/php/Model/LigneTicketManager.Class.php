<?php
class LigneTicketManager
{
    public static function add(LigneTicket $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO ligneTicket (quantite,prixHt,montantTVA,idTicket,idArticle) VALUES (:quantite,:prixHt,:montantTVA,:idTicket,:idArticle)");
        $q->bindValue(":quantite", $obj->getquantite());
        $q->bindValue(":prixHt", $obj->getprixHt());
        $q->bindValue(":montantTVA", $obj->getmontantTVA());
        $q->bindValue(":idTicket", $obj->getidTicket());
        $q->bindValue(":idArticle", $obj->getidArticle());
        $q->execute();
    }

    public static function update(LigneTicket $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE ligneticket SET quantite= :quantite, prixHt= :prixHt, montantTVA= :montantTVA, idTicket= :idTicket, idArticle= :idArticle WHERE idLigneTicket = :idLigneTicket");
        $q->bindValue(":idLigneTicket", $obj->getidLigneticket());
        $q->bindValue(":quantite", $obj->getquantite());
        $q->bindValue(":prixHt", $obj->getprixHt());
        $q->bindValue(":montantTVA", $obj->getmontantTVA());
        $q->bindValue(":idTicket", $obj->getidTicket());
        $q->bindValue(":idArticle", $obj->getidArticle());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM ligneTicket WHERE idLigneTicket = $id");
    }


    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM LigneTicket WHERE idLigneTicket = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new LigneTicket($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $client = [];
        $q = $db->query("SELECT * FROM LigneTicket");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $client[] = new LigneTicket($donnees);
            }
        }
        return $client;
    }

    public static function getByTicket($idTicket){
        $db = DbConnect::getDb();
        $idTicket = (int) $idTicket;
        $q = $db->query("SELECT * FROM LigneTicket WHERE idTicket = $idTicket");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new LigneTicket($results);
        } else {
            return false;
        }
    }

    public static function getByDate($dateFin){
        $db = DbConnect::getDb();
        $q = $db->query("SELECT * FROM Ticket WHERE date = $dateFin");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ticket($results);
        } else {
            return false;
        }
    }
}
