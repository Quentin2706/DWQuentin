<?php
class Agence
{

    /* ==========   Attributs   ========== */
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;

    /*==========    Accesseurs   ==========*/
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }
    public function setAdresse(string $adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }
    public function setCodePostal(string $codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }
    public function setVille(string $ville)
    {
        $this->_ville = $ville;
    }

    public  function getModeRestauration()
    {
        return $this->_modeRestauration;
    }
    public function setModeRestauration(string $moderestauration)
    {
        $this->_modeRestauration = strtolower($moderestauration);
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
    public function toString() // Affiche le détail de l'objet crée
    {
        return "\nNom de l'agence : ".$this->getNom()."\nAdresse : ".$this->getAdresse()."\nCode postal : ".$this->getCodePostal()."\nVille : ".$this->getVille()."\nMode de restauration : ".$this->getModeRestauration();
    }
}