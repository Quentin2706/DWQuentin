<?php

class Client
{ /***************************** Attributs ******************************************/

    private $_nom; // nom du client
    private $_prenom; //prénom du client
    private $_compte; // attribut de Type Compte, on force le setter
    private $_livret; //attribut de type Livret, on force le setter
/***************************** Getter / Setter ***********************************/
    /**
     * Get the value of _nom
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _compte
     */
    public function getCompte()
    {
        return $this->_compte;
    }

    /**
     * Set the value of _compte
     *
     * @return  self
     */
    public function setCompte(Compte $_compte)
    {
        $this->_compte = $_compte;

        return $this;
    }

    /**
     * Get the value of _livret
     */
    public function getLivret()
    {
        return $this->_livret;
    }

    /**
     * Set the value of _livret
     *
     * @return  self
     */
    public function setLivret(Livret $_livret)
    {
        $this->_livret = $_livret;

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
    public function recevoir($mtt)
    { // le client recoit de l'argent, on crédite son compte
        $this->getCompte()->crediter($mtt);
    }
    public function depenser($mtt)
    { // le client dépense de l'argent, on débite son compte
        $this->getCompte()->debiter($mtt);
    }
    public function epargner($mtt)
    { //le client épargne, on crédite son livret et on débite son compte
        $this->getLivret()->crediter($mtt);
        $this->getCompte()->debiter($mtt);
    }
    public function affiche()
    { //on affiche les informations du client
       echo "  Le client " .$this->getNom()."  " .$this->getPrenom(). " a ". $this->getCompte()->getMontant()."€ sur son compte ".$this->getCompte()->getNumero()." et ".$this->getLivret()->getMontant()."€ sur son livret " .$this->getLivret()->getNumero()."\n";
    }
}

