<?php
class ParticipationManager
{
    public static function add(Genres $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Participations (idActeur,acteur,idFilm,film) VALUES (:idActeur,:acteur,:idFilm,:film)");
        $q->bindValue(":idActeur", $obj->getIdActeur());
        $q->bindValue(":acteur", $obj->getActeur());
        $q->bindValue(":idFilm", $obj->getIdFilm());
        $q->bindValue(":film", $obj->getFilm());
        $q->execute();
    }
    public static function update(Genres $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE Participations SET libelleGenre=:libelleGenre,desGenre=:desGenre WHERE idGenre=:idGenre");
        $q->bindValue(":libelleGenre",$obj->getLibelleGenre());
        $q->bindValue(":desGenre",$obj->getDesGenre());
        $q->bindValue("idGenre",$obj->getIdGenre());
        $q->execute();
    }
    public static function delete(Genres $obj)
    {
        $db=DbConnect::getDb();
        $db->exec("DELETE FROM Genres WHERE idGenre=" . $obj->getIdGenre());
    }

    public static function findById($id)
    {
        $db=DbConnect::getDb();
        $id=(int) $id; // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Genres WHERE idGenre=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Genres($results);
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
        $q = $db->query("SELECT * FROM Genres");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees !=false)
            {
                $liste[] = new Genres($donnees);
            }
        }
        return $liste; // tableau contenant les objets Produits
    }

}
