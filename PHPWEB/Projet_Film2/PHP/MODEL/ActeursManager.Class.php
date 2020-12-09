<?php

class ActeursManager
{
    public static function add(Acteurs $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Acteurs (nomActeur, prenomActeur, origineActeur, dateDeNaissanceActeur) VALUES (:nomActeur, :prenomActeur, :origineActeur, :dateDeNaissanceActeur)");
        $q->bindValue(":nomActeur", $obj->getNomActeur());
        $q->bindValue(":prenomActeur", $obj->getPrenomActeur());
        $q->bindValue(":origineActeur", $obj->getOrigineActeur());
        $q->bindValue(":dateDeNaissanceActeur", $obj->getDateDeNaissanceActeur());
        $q->execute();
    }

    public static function update(Acteurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Acteurs SET nomActeur=:nomActeur, prenomActeur=:prenomActeur, origineActeur=:origineActeur, dateDeNaissanceActeur=:dateDeNaissanceActeur WHERE idActeur=:idActeur");
        $q->bindValue(":idActeur", $obj->getIdActeur());
        $q->bindValue(":nomActeur", $obj->getNomActeur());
        $q->bindValue(":prenomActeur", $obj->getPrenomActeur());
        $q->bindValue(":origineActeur", $obj->getOrigineActeur());
        $q->bindValue(":dateDeNaissanceActeur", $obj->getDateDeNaissanceActeur());
        $q->execute();
    }
    public static function delete(Acteurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Acteurs WHERE idActeur=" . $obj->getidActeur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Acteurs WHERE idActeur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Acteurs($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Acteurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Acteurs($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Acteurs
    }
}