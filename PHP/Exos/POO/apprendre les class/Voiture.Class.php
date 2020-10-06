<?php

class Voiture
{
    // ==Attributs==
    private $_marque;
    private $_modele;
    private $_km;

    // Constructeur
    public function __construct($marque, $modele, $km)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKm($km);

    }
    // ========    ASSESSEURS  =========
    // GETTER

    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getKm()
    {
        return $this->_km;
    }

//SETTER
    public function setMarque(string $marque)
    {
        $this->_marque = ctype_alpha($marque) ? $marque : null;
    }
    public function setModele(string $modele)
    {
        $this->_modele = ctype_alnum($modele) ? $modele : null;
    }
    public function setKm(int $km)
    {
        $this->_km = ctype_digit($km) && $km > 0 ? $km : null;
    }

    // AUTRES METHODES

    public function toString()
    {
        $result = " \nMarque : " . $this->getMarque() . " \nModele : " . $this->getModele() . " \nKm : " . $this->getKm();
        return $result;
    }
// EQUALS TO
    public function equalsTo(Voiture $obj)
    {
        if ($this->getMarque() == $obj->getMarque() && $this->getModele() == $obj->getModele() && $this->getKm() == $obj->getKm()) {
            return true;
        }
        return false;
    }
    // COMPARETO
    public function compareTo(Voiture $obj)
    {
        if ($this->getKm() > $obj->getKm()) {
            return 1;
        } else if ($this->getKm() < $obj->getKm()) {
            return -1;
        } else {
            return 0;
        }
    }
}
