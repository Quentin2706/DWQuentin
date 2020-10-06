<?php

class Employe
{

    /* ==========   Attributs   ========== */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_posteOccupe;
    private $_salaire;
    private $_service;
    private static $_nbEmploye=0;

    /*==========    Accesseurs   ==========*/
    // *=*=*=**=*=*=  NOM  *=*=*=*=*=*=*=*
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = strtoupper($nom);
    }
    // *=*=*=**=*=*=  PRENOM  *=*=*=*=*=*=*=*
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }
    // *=*=*=**=*=*=  DATEEMBAUCHE  *=*=*=*=*=*=*=*
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }
    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }
    // *=*=*=**=*=*=  POSTE OCCUPE  *=*=*=*=*=*=*=*
    public function getPosteOccupe()
    {
        return $this->_posteOccupe;
    }
    public function setPosteOccupe(string $posteOccupe)
    {
        $this->_posteOccupe = $posteOccupe;
    }
    // *=*=*=**=*=*=  SALAIRE  *=*=*=*=*=*=*=*
    public function getSalaire()
    {
        return $this->_salaire;
    }
    public function setSalaire(int $salaire)
    {
        $this->_salaire = $salaire;
    }
    // *=*=*=**=*=*=  SERVICE  *=*=*=*=*=*=*=*
    public function getService()
    {
        return $this->_service;
    }
    public function setService(string $service)
    {
        $this->_service = $service;
    }
    // *=*=*=**=*=*=  STATIC COMPTEUR  *=*=*=*=*=*=*=*
    public static function getNbEmploye()
    {
        return self::$_nbEmploye;
    }

    public static function setNbEmploye($nbEmploye)
    {
        self::$_nbEmploye = $nbEmploye;
    }

    /*==========    Constructeur   ==========  */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_nbEmploye++;
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
    
    public function anciennete()
    {
        $aujd= new DateTime('now');                      //  On compte le nombre d'année entre aujourdhui et la date précise.
        $diff= $aujd->diff($this->getDateEmbauche());
        $annee = $diff->format("%Y")*1;
        return $annee;
    }

    private function primeAnciennete()
    {
        $salaire = $this->getSalaire() * 1000;             // Salaire exprimé entierement exemple 60K euros devient 60 000.
        return $salaire * (0.05*$this->anciennete());
    }
    private function primeSalaire()
    {
        $salaire = $this->getSalaire() * 1000;             // Salaire exprimé entierement exemple 60K euros devient 60 000.
        return $salaire * (0.02*$this->anciennete());
    }
    public function prime()
    {
        return ($this->primeAnciennete()+$this->primeSalaire());
    }


    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nNom : ".$this->getNom()."\nPrenom : ".$this->getPrenom()."\nDate d'embauche : ".$this->getDateEmbauche()->format('d-m-Y')."\nPoste Occupé : ".$this -> getPosteOccupe()."\nSalaire : ".$this ->getSalaire()." K euros \nService : ".$this->getService();
    }
    // $_dateEmbauche;
    // private $_posteOccupe;
    // private $_salaire;
    // private $_service;

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