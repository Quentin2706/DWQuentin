<?php

class Cercle
{

    /*****************Attributs***************** */

    private $_diametre;

    /*****************Accesseurs***************** */

    public function getDiametre()
    {
        return $this->_diametre;
    }

    public function setDiametre($diametre)
    {
        $this->_diametre = $diametre;
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
    public function perimetre()
    {
        return 2 * Pi() * $this->getDiametre();
    }
    public function aire()
    {
		return Pi()*pow(($this->getDiametre() / 2),2);
    }
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String.
     */
    public function afficherCercle()
    {
        return "Diametre : [" . $this->getDiametre() . "] - Périmètre : [" . $this->perimetre() . "] - Aire : [" . $this->aire() . "]";

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
    public function compareTo($obj1, $obj2)
    {
        return 0;
    }
}
