<?php
class EtudiantsManager
{
    public static function add(Etudiants $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Etudiants (nomEtudiant, prenomEtudiant, adresseEtudiant, villeEtudiant) VALUES (:nom,:prenom,:adresse,:ville)");
        $q->bindValue(":nom", $obj->getNomEtudiant());
        $q->bindValue(":prenom", $obj->getPrenomEtudiant());
        $q->bindValue(":adresse", $obj->getAdresseEtudiant());
        $q->bindValue(":ville", $obj->getVilleEtudiant());
        $q->execute();
    }

    public static function update(Etudiants $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Etudiants SET nomEtudiant=:nomEtudiant, prenomEtudiant=:prenomEtudiant, adresseEtudiant=:adresseEtudiant, villeEtudiant=:villeEtudiant WHERE idEtudiant=:idEtudiant");
        $q->bindValue(":idEtudiant", $obj->getIdEtudiant());
        $q->bindValue(":nomEtudiant", $obj->getNomEtudiant());
        $q->bindValue(":prenomEtudiant", $obj->getPrenomEtudiant());
        $q->bindValue(":adresseEtudiant", $obj->getAdresseEtudiant());
        $q->bindValue(":villeEtudiant", $obj->getVilleEtudiant());
        $q->execute();
    }

    public static function delete(Etudiants $obj)
    {
        $db= DbConnect::getDb();
        $db->exec('DELETE FROM Etudiants WHERE idEtudiant=' . $obj->getIdEtudiant());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query ("SELECT * FROM Etudiants WHERE idEtudiant=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Etudiants($results);
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
        $q = $db->query('SELECT * FROM Etudiants');
        while($donnees = $q ->fetch (PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste [] = new Etudiants($donnees);
            }
        }
        return $liste;
    
    }
}