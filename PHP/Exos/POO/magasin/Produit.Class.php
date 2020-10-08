<?php

class Produit
{

    /* ==========   Attributs   ========== */
    private $_codeBarre;
    private $_designation;
    private $_couleur;
    private $_dateValidite;
    private $_categorie;
    private $_lieuxStockage=[];
    private static $_compteur;
    private $_prixHT;

    /*==========    Accesseurs   ==========*/
    public function getCodeBarre()
    {
        return $this->_codeBarre;
    }
    public function setCodeBarre($codeBarre)
    {
        $this->_codeBarre = $codeBarre;
    }
    
    public function getDesignation()
    {
        return $this->_designation;
    }
    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }
    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function getDateValidite()
    {
        return $this->_dateValidite;
    }
    public function setDateValidite($dateValidite)
    {
        $this->_dateValidite = $dateValidite;
    }
    
    public function getCategorie()
    {
        return $this->_categorie;
    }
    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getLieuxStockage()
    {
        return $this->_lieuxStockage;
    }
    public function setLieuxStockage($lieuxStockage)
    {
        $this->_lieuxStockage = $lieuxStockage;
    }

    public static function getCompteur()
    {
        return self::$_compteur;
    }
    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

    public function getPrixHT()
    {
        return $this->_prixHT;
    }
    public function setPrixHT($prixHT)
    {
        $this->_prixHT = $prixHT;
    }

    /*==========    Constructeur   ==========  */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur++;
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
        return "Code Barre : ".$this->getcodeBarre(). "Désignation : ". $this->getDesignation() . "Couleur : ".$this->getCouleur(). "Date de validité : ".$this->getDateValidite() 
        . "Catégorie : ".$this->getCategorie(). "Lieux de Stockage :".$this->getLieuxStockage(). "Compteur de produits crée :".Produit::getCompteur()."Prix HT :".$this->getPrixHT();
    }
    public function estPerime()
    {
        $aujd = new DateTime('NOW');
        $datePeremption = $dateobj->format('d-m-Y');
        $datePeremption > $aujd ? true : false;
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