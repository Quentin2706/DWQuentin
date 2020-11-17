<?php
class Produits
{
    private $_idProduit;
    private $_libelleProduit;
    private $_prix;
    private $_dateDePeremption;

    public function getIdProduit()
    {
        return $this->_idProduit;
    }
    public function setIdProduit($_idProduit)
    {
        return $this->_idProduit = $_idProduit;
    }
    public function getLibelleProduit()
    {
        return $this->_libelleProduit;
    }
    public function setLibelleProduit($_libelleProduit)
    {
        return $this->_libelleProduit = $_libelleProduit;
    }
    public function getPrix()
    {
        return $this->_prix;
    }
    public function setPrix($_prix)
    {
        return $this->_prix = $_prix;
    }
    public function getDateDePeremption()
    {
        return $this->_dateDePeremption;
    }
    public function setDateDePeremption($_dateDePeremption)
    {
        return $this->_dateDePeremption = $_dateDePeremption;
    }

    public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }
    public function toString()
    {
        return $this->getLibelleProduit().' : '.$this->getPrix().' € périme le ' .$this->getDateDePeremption(); 
    }
}
