<?php
class PaiementManager
{
    public static function add(Paiement $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Paiement (idModePaiement,idTicket,prixTTC) VALUES (:idModePaiement,:idTicket,:prixTTC)");
        $q->bindValue(":idModePaiement", $obj->getidModePaiement());
        $q->bindValue(":idTicket", $obj->getidTicket());
        $q->bindValue(":prixTTC", $obj->getprixTTC());
        $q->execute();
    }

    public static function update(Paiement $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE paiement SET idModePaiement= :idModePaiement, idTicket= :idTicket, prixTTC= :prixTTC WHERE idPaiement = :idPaiement");
        $q->bindValue(":idPaiement", $obj->getidPaiement());
        $q->bindValue(":idModePaiement", $obj->getidModePaiement());
        $q->bindValue(":idTicket", $obj->getidTicket());
        $q->bindValue(":prixTTC", $obj->getprixTTC());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Paiement WHERE idPaiement = $id");
    }


    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Paiement WHERE idPaiement = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Paiement($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $client = [];
        $q = $db->query("SELECT * FROM Paiement");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $client[] = new Paiement($donnees);
            }
        }
        return $client;
    }

}
