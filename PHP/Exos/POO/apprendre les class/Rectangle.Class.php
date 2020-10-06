<?php

class Rectangle
{
    // attributs
    private $_longueur;
    private $_largeur;

    // assesseurs
    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }
// CONSTRUCTEUR
    public function __construct(int $longueur,int $largeur)
    {
        $this->setLongueur($longueur);
        $this->setLargeur($largeur);
    }
// Methodes
public function perimetre(){
    return ($this->getLongueur() + $this->getLargeur())*2;
}
public function aire(){
    return $this->getLongueur() * $this->getLargeur();
}
public function estCarre(){
    return $this->getLargeur()==$this->getLongueur() ? "Il s’agit d’un carré" : "Il ne s’agit pas d’un carré";
}

public function afficherRectangle(){
    return "Longueur : [".$this->getLongueur()."] - Largeur : [".$this->getLargeur()."] - Périmètre : [".$this->perimetre()."] - Aire : [".$this->aire()."] - ".$this->estCarre();
}
}
