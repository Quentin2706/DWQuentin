<?php

class Personne
{
    // Attributs
    private $_genre;
    private $_age;
    private $_nom;
    private $_prenom;
    private $_situation;
    private $_taille;

    //Constructeur

    public function __construct()
    {

    }

    //===Assesseurs===
    //  GETTER
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
    public function getSituation()
    {
        return $this->_situation;
    }
    public function getTaille()
    {
        return $this->_taille;
    }

    //   SETTER
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }
    public function setNom($nom)
    {
        return $this->_nom;
    }
    public function setPrenom($prenom)
    {
        return $this->_prenom;
    }
    public function setAge($age)
    {
        return $this->_age = $age;
    }
    public function setSituation($sit)
    {
        return $this->_situation = $sit;
    }
    public function setTaille($taille)
    {
        return $this->_taille = $taille;
    }
}
$p1=new Personne();
var_dump($p1);
$p1->setGenre("Homme");
$p1->setAge(31);
$p1->setSituation("Marié");
$p1->setTaille(175);
echo $p1->getGenre();
echo "\n";
echo $p1->getAge();
echo " ans";
echo "\n";
echo $p1->getSituation();
echo "\n";
echo $p1->getTaille();
echo " cm";