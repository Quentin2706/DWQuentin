<?php 

class Realisateurs
{

    /* ==========   Attributs   ========== */
    private $_idRealisateur;
    private $_nomRealisateur;
    private $_prenomRealisateur;
    private $_dateDeNaissanceRealisateur;
    private $_paysOrigineRealisateur;

    /*==========    Accesseurs   ==========*/
    public function getIdRealisateur()
    {
        return $this->_idRealisateur;
    }

    public function setIdRealisateur(int $idRealisateur)
    {
        $this->_idRealisateur = $idRealisateur;
    }

    public function getNomRealisateur()
    {
        return $this->_nomRealisateur;
    }

    public function setNomRealisateur(string $nomRealisateur)
    {
        $this->_nomRealisateur = $nomRealisateur;
    }

    public function getPrenomRealisateur()
    {
        return $this->_prenomRealisateur;
    }

    public function setPrenomRealisateur(string $prenomRealisateur)
    {
        $this->_prenomRealisateur = $prenomRealisateur;
    }

    public function getDateDeNaissanceRealisateur()
    {
        return $this->_dateDeNaissanceRealisateur;
    }

    public function setDateDeNaissanceRealisateur($dateDeNaissanceRealisateur)
    {
        $this->_dateDeNaissanceRealisateur = $dateDeNaissanceRealisateur;
    }

    public function getPaysOrigineRealisateur()
    {
        return $this->_paysOrigineRealisateur;
    }

    public function setPaysOrigineRealisateur(string $paysOrigineRealisateur)
    {
        $this->_paysOrigineRealisateur = $paysOrigineRealisateur;
    }
    
    /*==========    Constructeur   ==========  */

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

    /*==========    Autres Méthodes   ==========*/
    
    public function toString()
    {
        return "\nid Realisateur  : ".$this->getIdRealisateur()
        ." \nNom du realisateur : ".$this->getNomRealisateur()
        ." \nPrenom du realisateur : ".$this->getPrenomRealisateur()
        ." \nDate de naissance du realisateur : ".$this->getDateDeNaissanceRealisateur()
        . " \nPays d'origine du réalisateur : ".$this->getPaysOrigineRealisateur();
    }

    public function age()
    {
        $auj = new DateTime('now');
        $interval = $auj->diff($this->getDateDeNaissanceRealisateur(), true); //diff renvoi une DateIntervalle, true oblige cet interval a être positif
        $annee = $interval->format('%y');
        return intval($annee);
    }
}