<?php

class Personne 
{
    // ==Attributs==

    private $_genre;
    private $_nom;
    private $_prenom;
    private $_age;
    
    // ==Constructeur==
    public function __Constructeur($genre,$nom,$prenom,$age){
        $this->setGenre($genre);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }

    // ===========  Assesseurs  ===========
    //    ==GETTER==
    public function getGenre(){
        return $this ->_genre;
    }
    public function getNom(){
        return $this ->_nom;
    }
    public function getPrenom(){
        return $this ->_prenom;
    }
    public function getAge(){
        return $this ->_age;
    }

    //    ==SETTER==
    public function setGenre($genre){
        $this ->_genre= ctype_alpha($genre) && ("homme" || "femme") ? strtoupper($genre) : NULL;
    }
    public function setNom($nom){
        $this ->_nom = ctype_alpha($nom) ? strtoupper($nom) : NULL;
    }
    public function setPrenom($prenom){
        return $this ->_prenom = ctype_alpha($prenom) ? strtoupper($prenom) : NULL;
    }
    public function setAge($age){
        return $this ->_age= ctype_digit($age) ? $age : NULL;
    }

    // Autres méthodes ... 
    public function toString(){
    $result = " C'est un(e) $this->_genre ";
}
}