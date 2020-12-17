<?php

class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO `utilisateurs`(`nom`, `prenom`, `motDePasse`, `adresseMail`, `role`, `pseudo`) VALUES (:nom, :prenom, :motDePasse, :adresseMail, :role, :pseudo)");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Utilisateurs SET nom=:nom, prenom=:prenom, motDePasse=:motDePasse, adresseMail=:adresseMail, role=:role, pseudo=:pseudo WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }
    public static function delete(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Utilisateurs($results);
        } else {
            return false;
        }
    }

    public static function findByPseudo($pseudo)
    {
        $db = DbConnect::getDb();
        if (!in_array(";", str_split($pseudo))) {
            $q = $db->query('SELECT * FROM Utilisateurs WHERE pseudo="' . $pseudo . '"');
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false) {
                return new Utilisateurs($results);
            } else {
                return false;
            }
        }
        else{
            return false;
        }
    }


    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Utilisateurs($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Studios
    }
}
