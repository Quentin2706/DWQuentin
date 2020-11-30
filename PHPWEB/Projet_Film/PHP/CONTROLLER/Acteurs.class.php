<?php
class Acteurs
{

    /*****************Attributs***************** */
    private $_idActeur;
    private $_nomActeur;
    private $_prenomActeur;
    private $_origineActeur;
    private $_dateDeNaissanceActeur;

    /*****************Accesseurs***************** */

    public function getIdActeur()
    {
        return $this->_idActeur;
    }

    public function setIdActeur(int $idActeur)
    {
        $this->_idActeur = $idActeur;
    }

    public function getNomActeur()
    {
        return $this->_nomActeur;
    }

    public function setNomActeur($nomActeur)
    {
        $this->_nomActeur = $nomActeur;
    }

    public function getPrenomActeur()
    {
        return $this->_prenomActeur;
    }

    public function setPrenomActeur($prenomActeur)
    {
        $this->_prenomActeur = $prenomActeur;
    }

    public function getOrigineActeur()
    {
        return $this->_origineActeur;
    }

    public function setOrigineActeur($origineActeur)
    {
        $this->_origineActeur = $origineActeur;
    }

    public function getDateDeNaissanceActeur()
    {
        return $this->_dateDeNaissanceActeur;
    }

    public function setDateDeNaissanceActeur($dateDeNaissanceActeur)
    {
        $this->_dateDeNaissanceActeur = $dateDeNaissanceActeur;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nID : ".$this->getIdActeur()."\nNom : ".$this->getNomActeur()."\nPrenom : ".$this->getPrenomActeur()."\nOrigine : ".$this->getOrigineActeur()."\nDate de naissance : ".$this->getDateDeNaissanceActeur() ;

    }

    public function Age()
    {
        $auj= new DateTime("now");
        $age=$auj->diff($this->getDateDeNaissanceActeur());
        return $age->format("%y")*1;
    }

}
