<?php

 Class Auteur {
	/***************************************** Attributs **********************************************/

	private $_nom ;
	private $_prenom ;
	private $_dateNaissance ;
	private $_dateDeces ;

	/***************************************** Accesseurs **********************************************/
	
	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom(string $nom)
	{
		$this->_nom = $nom;
	}
	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom(string $prenom)
	{
		$this->_prenom = $prenom;
	}
	public function getDateNaissance()
	{
		return $this->_dateNaissance;
	}

	public function setDateNaissance(DateTime $dateNaissance)
	{
		$this->_dateNaissance = $dateNaissance;
	}
	public function getDateDeces()
	{
		return $this->_dateDeces;
	}

	public function setDateDeces(DateTime $dateDeces)
	{
		$this->_dateDeces = $dateDeces;
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

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){						// ON AFFICHE LES INFOS DE L'AUTEUR
		$aff = "";
		$aff .= " \nnom : ".$this->getNom()	." \nprenom : ".$this->getPrenom()	." \nDate de Naissance : ".$this->getDateNaissance()->format('d-m-Y');
		if($this->_dateDeces === NULL)
		{
			$aff .= ""." \nDate de deces : NULL";
		 } else {
		 	$aff .= " \nDate de deces : ".$this->getDateDeces()->format('d-m-Y');
		}
		return $aff;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo($obj){
		if($this->getNom() == $obj->getNom()) 					// ON PEUT COMPRARER LES DEUX OBJETS PAR LE NOM PRENOM DATE DE NAISSANCE ET DATE DE DECES
		{
			if($this->getPrenom() == $obj->getPrenom())
			{
				if($this->getdateNaissance() == $obj->getdateNaissance())
				{
					if($this->getdateDeces() == $obj->getdateDeces())
					{
						return true;
					}
					return false;
				}
				return false;
			}
			return false;
		}
		return false;	
	}

	public function estVivant()				// ON VERIFIE SI L'AUTEUR EST ENCORE VIVANT
	{
		$aujd = new DateTime('NOW');
		if($this->_dateDeces === NULL)
		{
			return true;
		} else {
			$deces = $this->getDateDeces();
			return ($aujd > $deces ? false : true);
		} 
	}

}