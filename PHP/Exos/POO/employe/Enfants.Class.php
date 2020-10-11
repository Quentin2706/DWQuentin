<?php

class Enfants
{

    /* ==========   Attributs   ========== */
    private $_prenom;
    private $_dateNaissance;

    /*==========    Accesseurs   ==========*/
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }
    public function setDateNaissance($date)
    {
        $this->_dateNaissance = $date;
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
    public function Age()
    {
        $aujd = new DateTime('now'); //  On compte le nombre d'année entre aujourdhui et la date précise.
        $diff = $aujd->diff($this->getDateNaissance());
        $annee = $diff->format("%Y") * 1;
        return $annee;
    } 
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nPrénom :".$this->getPrenom()."\t\t"  .   "Date de naissance :".$this->getDateNaissance()->format('d-m-Y')."\t\t"   .  "Age : ".$this->Age()." ans";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

}