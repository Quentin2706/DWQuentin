<?php
// Il s'agit de la classe de management de la classe User.
// Ici seul 2 �thodes sont impl�ment�es
class UserManager
{

    public static function add(User $obj)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Préparation de la requête d'insertion.
        $q = $db->prepare("INSERT INTO user (identifiant, motDePasse, Role) VALUES (:identifiant, :motDePasse, :role)");

        // Assignation des valeurs .
        $q->bindValue(':identifiant', $obj->getidentifiant());
        $q->bindValue(':motDePasse', $obj->getmotDePasse());
        $q->bindValue(':role', $obj->getRole());

        // Exécution de la requête.
        $q->execute();
        $q->CloseCursor();
    }

    public static function update(User $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE user SET identifiant= :identifiant, motDePasse= :motDePasse, role= :role WHERE idUser= :idUser");
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":identifiant", $obj->getIdentifiant());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":role", $obj->getRole());
        $q->execute();
    }

    public static function delete($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM user WHERE idUser= $id");
    }

    public static function getUserId($identifiant)
    {
        $db = DbConnect::getDb(); // Instance de PDO.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
        $q = $db->prepare('SELECT identifiant, motDePasse, role FROM user WHERE identifiant = :identifiant');

        // Assignation des valeurs .
        $q->bindValue(':identifiant', $identifiant);
        $q->execute();
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        $q->CloseCursor();
        if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
            return new User();
        } else {
            return new User($donnees);
        }
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM user WHERE idUser = $id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new User($results);
        } else {
            return false;
        }
    }
//     public static function getUserRole($role)
//     {
//         $db = DbConnect::getDb(); // Instance de PDO.
//         // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
//         $q = $db->prepare('SELECT identifiant, motDePasse, Role FROM user WHERE role = :role');

//         // Assignation des valeurs .
//         $q->bindValue(':role', $role);
//         $q->execute();
//         $donnees = $q->fetch(PDO::FETCH_ASSOC);
//         $q->CloseCursor();
//         if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
//             return new User();
//         } else {
//             return new User($donnees);
//         }
//     }
public static function getList()
{
    $db = DbConnect::getDb();
    $user= [];
    $q = $db->query("SELECT * FROM user");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
        if ($donnees != false) {
            $user[] = new User($donnees);
        }
    }
    return $user;
}
}
