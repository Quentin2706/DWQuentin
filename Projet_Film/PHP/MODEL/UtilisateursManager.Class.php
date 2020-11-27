<?php

class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Utilisateurs (prenomUtilisateur, nomUtilisateur, mdpUtilisateur, emailUtilisateur, roleUtilisateur, pseudoUtilisateur ) VALUES (:prenomUtilisateur, :nomUtilisateur, :mdpUtilisateur, :emailUtilisateur, :roleUtilisateur, :pseudoUtilisateur )");
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":mdpUtilisateur", $obj->getMdpUtilisateur());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Utilisateurs SET prenomUtilisateur=:prenomUtilisateur, nomUtilisateur=:nomUtilisateur, mdpUtilisateur=:mdpUtilisateur, emailUtilisateur=:emailUtilisateur, roleUtilisateur=:roleUtilisateur, roleUtilisateur=:roleUtilisateur WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":mdpUtilisateur", $obj->getMdpUtilisateur());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->execute();
    }
    public static function delete(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" . $obj->getidUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Utilisateurs($results);
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
        $q = $db->query("SELECT * FROM Utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Utilisateurs($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Utilisateurs
    }

    public static function findByPseudo($pseudo)
    {
        $db = DbConnect::getDb();
        $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudoUtilisateur='" . $pseudo."'");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Utilisateurs($results);
        }
        else
        {
            return false;
        }
    }

}