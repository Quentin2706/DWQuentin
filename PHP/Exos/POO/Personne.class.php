<?php

class Personne
{
    // ==Attributs==

    private $_genre;
    private $_nom;
    private $_prenom;
    private $_age;

    // ==Constructeur==
    public function __construct(string $genre, string $nom, string $prenom, string $age)
    {
        $this->setGenre( $genre);
        $this->setNom( $nom);
        $this->setPrenom( $prenom);
        $this->setAge( $age);
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
    // =======================================

    // Autres méthodes ...
    public function toString()
    {
        $result = " \nGenre : " . $this->_genre . " \nNom : " . $this->_nom . " \nPrenom : " . $this->_prenom . " \nAge : " . $this->_age;
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
    public function compareTo( Personne $obj)
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

$p1 = new Personne("homme", "balair", "quentin", "21");
$p2 = new Personne("homme", "balair", "quentin", "22");
echo $p1-> toString()."\n";
echo $p2-> toString()."\n";
echo $p1-> compareTo($p2);
$equal=$p1-> equalsTo($p2);
echo "\n";
var_dump($equal);

