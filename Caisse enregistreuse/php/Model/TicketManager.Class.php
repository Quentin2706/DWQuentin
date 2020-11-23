<?php
class TicketManager
{
    public static function add(Ticket $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO ticket (prixht,date,montantTVA) VALUES (:prixht,:date,:montantTVA)");
        $q->bindValue(":prixht", $obj->getprixHT());
        $q->bindValue(":date", $obj->getdate()->format("j/m/y"));
        $q->bindValue(":montantTVA", $obj->getmontantTVA());
        $q->execute();
    }

    public static function update(Ticket $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE ticket SET prixht= :prixht, date= :date, montantTVA= :montantTVA WHERE idTicket = :idTicket");
        $q->bindValue(":idTicket", $obj->getidTicket());
        $q->bindValue(":prixht", $obj->getprixHT());
        $q->bindValue(":date", $obj->getdate());
        $q->bindValue(":montantTVA", $obj->getmontantTVA());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM ticket WHERE idTicket = $id");
    }


    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM ticket WHERE idTicket = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Ticket($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $ticket = [];
        $q = $db->query("SELECT * FROM ticket");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $ticket[] = new Ticket($donnees);
            }
        }
        return $ticket;
    }

}
