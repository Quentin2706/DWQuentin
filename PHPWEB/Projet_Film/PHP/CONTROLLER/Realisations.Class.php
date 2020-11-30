<?php

Class Realisations{
    /***************************** Attributs *****************************/
    private $_idRealisation;
    private $_idRealisateur;
    private $_idFilm;
    private $_dateDebutRealisation;
    private $_dateFinRealisation;
    private $_realisateur;
    private $_film;
    /********************************Accesseurs **************************/

    public function getIdRealisation()
    {
        return $this->_idRealisation;
    }

    public function setIdRealisation(int $idRealisation)
    {
        $this->_idRealisation = $idRealisation;
    }

    public function getIdRealisateur()
    {
        return $this->_idRealisateur;
    }

    public function setIdRealisateur(int $idRealisateur)
    {
        $this->_idRealisateur = $idRealisateur;
        $this->setRealisateur(RealisateursManager::findById($idRealisateur));
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

    public function getDateDebutRealisation()
    {
        return $this->_dateDebutRealisation;
    }

    public function setDateDebutRealisation($dateDebutRealisation)
    {
        $this->_dateDebutRealisation = $dateDebutRealisation;
    }

    public function getDateFinRealisation()
    {
        return $this->_dateFinRealisation;
    }

    public function setDateFinRealisation($dateFinRealisation)
    {
        $this->_dateFinRealisation = $dateFinRealisation;
    }

    public function getRealisateur()
    {
        return $this->_realisateur;
    }

    public function setRealisateur(Realisateurs $realisateur)
    {
        $this->_realisateur = $realisateur;
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
        return "idRéalisation : ".$this->getIdRealisation()." idRéalisateur : ".$this->getIdRealisateur()." idFilm : ".$this->getIdFilm()." dateDebut : ".$this->getDateDebutRealisation()." dateFin : ".$this->getDateFinRealisation();
    }


    public function tempsRealisation(){
        $dateFin=$this->getDateFinRealisation();
        $dateDebut=$this->getDateDebutRealisation();
        $tempsRealisation=$dateFin->diff($dateDebut,true);
        return $tempsRealisation->format("%y-%m-%d");
    }

}