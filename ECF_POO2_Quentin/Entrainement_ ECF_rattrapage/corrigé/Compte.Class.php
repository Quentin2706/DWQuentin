<?php

class Compte
{
    /***************************** Attributs ******************************************/
    private $_numero; //numéro de compte
    private $_montant;//montant sur le compte
    /***************************** Getter / Setter ***********************************/

    /**
     * Get the value of _montant
     */
    public function getMontant()
    {
        return $this->_montant;
    }

    /**
     * Set the value of _montant
     *
     * @return  self
     */
    public function setMontant($_montant)
    {
        $this->_montant = $_montant;

        return $this;
    }
     /**
     * Get the value of _numero
     */ 
    public function getNumero()
    {
        return $this->_numero;
    }

    /**
     * Set the value of _numero
     *
     * @return  self
     */ 
    public function setNumero($_numero)
    {
        $this->_numero = $_numero;

        return $this;
    }
    /***************************** Constructeur ******************************************/

    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
    }
    /***************************** Autres méthodes ******************************************/
    public function crediter($mtt)
    {//on ajoute le montant passé en paramètre au compte
        $this->setMontant($this->getMontant()+$mtt);
    }
    public function debiter($mtt)
    {//on retire le montant passé en paramètre au compte
        $this->setMontant($this->getMontant()-$mtt);
    }
    

   
}
