<?php

class LieuxStokage
{

    /* ==========   Attributs   ========== */
    private $_numeroEntrepot;
    private $_Zone;
    private $_Ville;

    /*==========    Accesseurs   ==========*/
    public function getNumeroEntrepot()
    {
        return $this->_numeroEntrepot;
    }
    public function setNumeroEntrepot($numeroEntrepot)
    {
        $this->_numeroEntrepot = $numeroEntrepot;
    }
    
    public function getZone()
    {
        return $this->_Zone;
    }
    public function setZone($Zone)
    {
        $this->_Zone = $Zone;
    }

    public function getVille()
    {
        return $this->_Ville;
    }
    public function setVille($Ville)
    {
        $this->_Ville = $Ville;
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
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "Numéro de l'entrepot :".$this->getNumeroEntrepot()."Zone :".$this->getZone()."Ville :".$this->getVille();
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