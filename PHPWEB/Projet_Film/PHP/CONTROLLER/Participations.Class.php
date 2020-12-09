<?php

Class Participations{
    /***************************** Attributs *****************************/
    private $_idParticipation;
    private $_idActeur;
    private $_acteur;
    private $_idFilm;
    private $_film;
    /********************************Accesseurs **************************/
    public function getIdParticipation()
    {
        return $this->_idParticipation;
    }

    public function setIdParticipation(int $idParticipation)
    {
        $this->_idParticipation = $idParticipation;
    }

    public function getIdActeur()
    {
        return $this->_idActeur;
    }

    public function setIdActeur(int $idActeur)
    {
        $this->_idActeur = $idActeur;
        $this->setActeur(ActeursManager::findById($idActeur));
    }

    public function getIdFilm()
    {
        return $this->_idFilm;
    }

    public function setIdFilm(int $idFilm)
    {
        $this->_idFilm = $idFilm;
        $this->setFilm(FilmsManager::findById($idFilm));
    }

    public function getActeur()
    {
        return $this->_acteur;
    }

    public function setActeur(Acteurs $acteur)
    {
        $this->_acteur = $acteur;
    }

    public function getFilm()
    {
        return $this->_film;
    }

    public function setFilm(Films $film)
    {
        $this->_film = $film;
    }
    /*********************** Constructeur *********************************/

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /********************************Methode *****************************/

    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
    public function toString(){
        return "idParticipation : ".$this->getIdParticipation()." idActeur : ".$this->getIdActeur()." idFilm : ".$this->getIdFilm();
    }

}