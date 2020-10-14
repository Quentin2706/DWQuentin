<?php

 Class Video extends Document {
	/***************************************** Attributs **********************************************/

	private $_sousTitres ;

	/***************************************** Accesseurs **********************************************/
	
	public function getSousTitres()
	{
		return $this->_sousTitres;
	}

	public function setSousTitres(string $sousTitres)
	{
		$this->_sousTitres = $sousTitres;
	}

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		parent::__construct($options);
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
	public function toString(){			// ON AFFICHE LE DOCUMENT SUR LA VIDEO
		return " Titre : ".$this->getTitre()	." Auteur : ".$this->getAuteur()	." Sous-Titres : ".$this->getSousTitres()	;
	}

}