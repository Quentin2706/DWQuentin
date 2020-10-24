<?php

 Class Client {
	/***************************************** Attributs **********************************************/

	private $_nom ;
	private $_prenom ;
	private $_compte ;
	private $_livret ;

	/***************************************** Accesseurs **********************************************/
	
	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}
	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom = $prenom;
	}
	public function getCompte()
	{
		return $this->_compte;
	}

	public function setCompte($compte)
	{
		$this->_compte = $compte;
	}
	public function getLivret()
	{
		return $this->_livret;
	}

	public function setLivret($livret)
	{
		$this->_livret = $livret;
	}

	/***************************************** Constructeur **********************************************/

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

	/***************************************** Methode **********************************************/
	public function recoitArgent($montant)
	{
		return $this->getCompte()->crediter($montant);
	}
	public function depenseArgent($montant)
	{
		return $this->getCompte()->debiter($montant);
	}
	public function EpargneArgent($montant)
	{
		$this->getCompte()->debiter($montant);
		return $this->getLivret()->crediter($montant);
	}
	public function Affiche(){
		return " Le client ".$this->getNom(). " " .$this->getPrenom()." a ". $this->getCompte()->getMontant(). " sur son compte ". $this->getCompte()->getNumero(). " et ". $this->getLivret()->getMontant(). " sur son livret ". $this->getLivret()->getNumero();
	}



}