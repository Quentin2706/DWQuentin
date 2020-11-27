<?php

class StudiosManager
{
    public static function add(Studios $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Studios (nomStudio, paysStudio, fondateurStudio, creationStudio) VALUES (:nomStudio, :paysStudio, :fondateurStudio, :creationStudio)");
        $q->bindValue(":nomStudio", $obj->getnomStudio());
        $q->bindValue(":paysStudio", $obj->getpaysStudio());
        $q->bindValue(":fondateurStudio", $obj->getfondateurStudio());
        $q->bindValue(":creationStudio", $obj->getcreationStudio());
        $q->execute();
    }

    public static function update(Studios $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Studios SET nomStudio=:nomStudio, paysStudio=:paysStudio, fondateurStudio=:fondateurStudio, creationStudio=:creationStudio WHERE idStudio=:idStudio");
        $q->bindValue(":idStudio", $obj->getIdStudio());
        $q->bindValue(":nomStudio", $obj->getnomStudio());
        $q->bindValue(":paysStudio", $obj->getpaysStudio());
        $q->bindValue(":fondateurStudio", $obj->getfondateurStudio());
        $q->bindValue(":creationStudio", $obj->getcreationStudio());
        $q->execute();
    }
    public static function delete(Studios $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Studios WHERE idStudio=" . $obj->getidStudio());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Studios WHERE idStudio=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Studios($results);
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
        $q = $db->query("SELECT * FROM Studios");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Studios($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Studios
    }
}