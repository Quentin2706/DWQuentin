<?php

class RealisateursManager
{
    public static function add(Realisateurs $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Realisateurs (nomRealisateur, prenomRealisateur, dateDeNaissanceRealisateur, paysOrigineRealisateur) VALUES (:nomRealisateur, :prenomRealisateur, :dateDeNaissanceRealisateur, :paysOrigineRealisateur)");
        $q->bindValue(":nomRealisateur", $obj->getNomRealisateur());
        $q->bindValue(":prenomRealisateur", $obj->getPrenomRealisateur());
        $q->bindValue(":dateDeNaissanceRealisateur", $obj->getDateDeNaissanceRealisateur());
        $q->bindValue(":paysOrigineRealisateur", $obj->getPaysOrigineRealisateur());
        $q->execute();
    }

    public static function update(Realisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Realisateurs SET nomRealisateur=:nomRealisateur, prenomRealisateur=:prenomRealisateur, dateDeNaissanceRealisateur=:dateDeNaissanceRealisateur, paysOrigineRealisateur=:paysOrigineRealisateur WHERE idRealisateur=:idRealisateur");
        $q->bindValue(":idRealisateur", $obj->getIdRealisateur());
        $q->bindValue(":nomRealisateur", $obj->getNomRealisateur());
        $q->bindValue(":prenomRealisateur", $obj->getPrenomRealisateur());
        $q->bindValue(":dateDeNaissanceRealisateur", $obj->getDateDeNaissanceRealisateur());
        $q->bindValue(":paysOrigineRealisateur", $obj->getPaysOrigineRealisateur());
        $q->execute();
    }
    public static function delete(Realisateurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Realisateurs WHERE idRealisateur=" . $obj->getidRealisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Realisateurs WHERE idRealisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Realisateurs($results);
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
        $q = $db->query("SELECT * FROM Realisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Realisateurs($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Realisateurs
    }
}