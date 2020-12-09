<?php
class ParticipationsManager
{
    public static function add(Participations $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Participations (idActeur,idFilm) VALUES (:idActeur,:idFilm)");
        $q->bindValue(":idActeur", $obj->getIdActeur());
        $q->bindValue(":idFilm", $obj->getIdFilm());
        $q->execute();
    }
    public static function update(Participations $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE Participations SET idActeur=:idActeur,idFilm=:idFilm WHERE idParticipation=:idParticipation");
        $q->bindValue(":idActeur", $obj->getIdActeur());
        $q->bindValue(":idFilm", $obj->getIdFilm());
        $q->bindValue("idParticipation",$obj->getIdParticipation());  
        $q->execute();
    }
    public static function delete(Participations $obj)
    {
        $db=DbConnect::getDb();
        $db->exec("DELETE FROM Participations WHERE idParticipation=" . $obj->getIdParticipation());
    }

    public static function findById($id)
    {
        $db=DbConnect::getDb();
        $id=(int) $id; // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Participations WHERE idParticipation=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Participations($results);
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
        $q = $db->query("SELECT * FROM Participations");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees !=false)
            {
                $liste[] = new Participations($donnees);
            }
        }
        return $liste; // tableau contenant les objets Produits
    }

    public static function getListByActeur(Acteurs $acteur){
        $id=(int) $acteur->getIdActeur();
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Participations where idActeur=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Participations($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Participations
    }

    public static function getListByFilm(Films $films){
        $id=(int) $films->getIdFilm();
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Participations where idFilm=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Participations($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Participations
    }

}
