<?php

Class Films{
    /***************************** Attributs *****************************/
    private $_idFilm;
    private $_nomFilm;
    private $_dateFilm;
    private $_coutFilm;
    private $_dureeFilm;
    private $_synopFilm;
    private $_idStudio;
    private $_studio;
    private $_idGenre;
    private $_genre;
    /********************************Accesseurs **************************/

    public function getIdFilm()
    {
        return $this->_idFilm;
    }

    public function setIdFilm(int $idFilm)
    {
        $this->_idFilm = $idFilm;
    }

    public function getNomFilm()
    {
        return $this->_nomFilm;
    }

    public function setNomFilm($nomFilm)
    {
        $this->_nomFilm = $nomFilm;
    }

    public function getDateFilm()
    {
        return $this->_dateFilm;
    }

    public function setDateFilm($dateFilm)
    {
        $this->_dateFilm = $dateFilm;
    }

    public function getCoutFilm()
    {
        return $this->_coutFilm;
    }

    public function setCoutFilm(float $coutFilm)
    {
        $this->_coutFilm = $coutFilm;
    }

    public function getDureeFilm()
    {
        return $this->_dureeFilm;
    }

    public function setDureeFilm(int $dureeFilm)
    {
        $this->_dureeFilm = $dureeFilm;
    }

    public function getSynopFilm()
    {
        return $this->_synopFilm;
    }

    public function setSynopFilm($synopFilm)
    {
        $this->_synopFilm = $synopFilm;
    }

    public function getIdStudio()
    {
        return $this->_idStudio;
    }

    public function setIdStudio(int $idStudio)
    {
        $this->_idStudio = $idStudio;
        $this->setStudio(StudiosManager::findById($idStudio));
    }

    public function getIdGenre()
    {
        return $this->_idGenre;
    }

    public function setIdGenre(int $idGenre)
    {
        $this->_idGenre = $idGenre;
        $this->setGenre(GenresManager::findById($idGenre));
    }

    public function getStudio()
    {
        return $this->_studio;
    }

    public function setStudio(Studios $studio)
    {
        $this->_studio = $studio;
    }

    public function getGenre()
    {
        return $this->_genre;
    }

    public function setGenre(Genres $genre)
    {
        $this->_genre = $genre;
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
        return "idFilm : ".$this->getIdFilm()." nomFilm : ".$this->getNomFilm()." date : ".$this->getDateFilm()." cout : ".$this->getCoutFilm()." durée :".$this->getDureeFilm()
        ." synopsis :".$this->getSynopFilm()." idStudio :".$this->getIdStudio()." idGenre:".$this->getIdGenre();
    }

    

    
}