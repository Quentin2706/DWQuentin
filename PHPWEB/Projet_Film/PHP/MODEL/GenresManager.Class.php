<?php
class GenresManager
{
    public static function add(Genres $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Genres (libelleGenre,descGenre) VALUES (:libelleGenre,:descGenre)");
        $q->bindValue(":libelleGenre", $obj->getLibelleGenre());
        $q->bindValue(":descGenre", $obj->getDescGenre());
        $q->execute();
    }
    public static function update(Genres $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE Genres SET libelleGenre=:libelleGenre,descGenre=:descGenre WHERE idGenre=:idGenre");
        $q->bindValue(":libelleGenre",$obj->getLibelleGenre());
        $q->bindValue(":descGenre",$obj->getDescGenre());
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
        return $liste; // tableau contenant les objets Genres
    }

}
