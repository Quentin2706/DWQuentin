<?php

class Personne
{
    // ==Attributs==

    private $_genre;
    private $_nom;
    private $_prenom;
    private $_age;
    private $_voiture;

    // ==Constructeur==
    public function __construct($genre, $nom, $prenom, $age, $voiture)
    {
        $this->setGenre($genre);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setVoiture($voiture);
    }

    // ===========  Assesseurs  ===========
    //    ==GETTER==
    public function getGenre()
    {
        return $this->_genre;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getVoiture()
    {
        return $this->_voiture;
    }

    //    ==SETTER==
    public function setGenre(string $genre)
    {
        $this->_genre = ctype_alpha($genre) && ("homme" || "femme") ? strtoupper($genre) : null;
    }
    public function setNom(string $nom)
    {
        $this->_nom = ctype_alpha($nom) ? strtoupper($nom) : null;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = ctype_alpha($prenom) ? ucfirst(strtolower($prenom)) : null;
    }
    public function setAge(string $age)
    {
        $this->_age = ctype_digit($age) ? $age : null;
    }
    public function setVoiture($voiture)
    {
        $this->_voiture = $voiture;
    }

    // =======================================

    // Autres méthodes ...
    public function toString()
    {
        $result = " \nGenre : " . $this->_genre . " \nNom : " . $this->_nom . " \nPrenom : " . $this->_prenom . " \nAge : " . $this->_age . "\n La marque de la voiture : " . $this->getVoiture()->getMarque();
        return $result;
    }
    // EQUALS TO
    public function equalsTo(Personne $obj)
    {
        if ($this->_genre == $obj->getGenre() && $this->_nom == $obj->getNom() && $this->_prenom == $obj->getPrenom() && $this->_age == $obj->getAge()) {
            return true;
        }
        return false;
    }
    // COMPARE TO
    public function compareTo(Personne $obj)
    {
        if ($this->_age > $obj->getAge()) {
            return 1;
        } elseif ($this->_age < $obj->getAge()) {
            return -1;
        } else {
            return 0;
        }
    }

}
