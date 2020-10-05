<?php

class Famille
{
    private $_pere;
    private $_mere;
    private $_voiture;
    //assesseurs
    public function getPere()
    {
        return $this->_pere;
    }

    public function setPere($pere)
    {
        $this->_pere = $pere;
    }
    public function getMere()
    {
        return $this->_mere;
    }

    public function setMere($mere)
    {
        $this->_mere = $mere;
    }
    public function getVoiture()
    {
        return $this->_voiture;
    }

    public function setVoiture($voiture)
    {
        $this->_voiture = $voiture;
    }
    // constructeur
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
    // METHODES 
    public function toString()
    {
        $result = "\n Le père est : ".$this->getPere()->getNom(). " ".$this->getPere()->getPrenom(). " ".$this->getPere()->getAge()." ans \n\n La mère est :" .$this->getMere()->getNom(). " ".$this->getMere()->getPrenom(). " ".$this->getMere()->getAge(). " ans \n ";
        $result .= $this->getPere()->getVoiture()->equalsTo($this->getMere()->getVoiture()) ? "\nLa voiture des parents est : ".$this->getPere()->getVoiture()->toString() : "\nLa voiture du père est :".$this->getPere()->getVoiture()->toString(). " \n\nLa voiture de la mère est : ".$this->getMere()->getVoiture()->toString(); 
        return $result;
    }
}
