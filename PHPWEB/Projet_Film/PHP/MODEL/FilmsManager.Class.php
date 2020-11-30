<?php

class FilmsManager
{
    public static function add(Films $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Films (nomFilm, dateFilm, coutFilm, dureeFilm, synopFilm, idStudio, idGenre) VALUES (:nomFilm, :dateFilm, :coutFilm, :dureeFilm, :synopFilm, :idStudio, :idGenre)");
        $q->bindValue(":nomFilm", $obj->getNomFilm());
        $q->bindValue(":dateFilm", $obj->getDateFilm());
        $q->bindValue(":coutFilm", $obj->getCoutFilm());
        $q->bindValue(":dureeFilm", $obj->getDureeFilm());
        $q->bindValue(":synopFilm", $obj->getSynopFilm());
        $q->bindValue(":idStudio", $obj->getIdStudio());
        $q->bindValue(":idGenre", $obj->getIdGenre());
        $q->execute();
    }

    public static function update(Films $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Films SET nomFilm=:nomFilm, dateFilm=:dateFilm, coutFilm=:coutFilm, dureeFilm=:dureeFilm, synopFilm=:synopFilm, idStudio=:idStudio, idGenre=:idGenre WHERE idFilm=:idFilm");
        $q->bindValue(":idFilm", $obj->getIdFilm());
        $q->bindValue(":nomFilm", $obj->getNomFilm());
        $q->bindValue(":dateFilm", $obj->getDateFilm());
        $q->bindValue(":coutFilm", $obj->getCoutFilm());
        $q->bindValue(":dureeFilm", $obj->getDureeFilm());
        $q->bindValue(":synopFilm", $obj->getSynopFilm());
        $q->bindValue(":idStudio", $obj->getIdStudio());
        $q->bindValue(":idGenre", $obj->getIdGenre());
        $q->execute();
    }
    public static function delete(Films $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Films WHERE idFilm=" . $obj->getidFilm());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Films WHERE idFilm=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Films($results);
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
        $q = $db->query("SELECT * FROM Films");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Films($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Films
    }

    public static function getListByGenre(Genres $genre){
        $id=(int) $genre->getIdGenre();
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Films where idGenre=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Films($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Films
    }

    public static function updateGenreDefault(Films $films){
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Films SET idGenre=:idGenre WHERE idFilm=:idFilm");
        $q->bindValue(":idFilm", $films->getIdFilm());
        $q->bindValue(":idGenre", 1);
        $q->execute();
    }

    public static function getListByStudio(Studios $studio){
        $id=(int) $studio->getIdStudio();
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Films where idStudio=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Films($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Films
    }

    public static function updateStudioDefault(Films $films){
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Films SET idStudio=:idStudio WHERE idFilm=:idFilm");
        $q->bindValue(":idFilm", $films->getIdFilm());
        $q->bindValue(":idStudio", 1);
        $q->execute();
    }
}