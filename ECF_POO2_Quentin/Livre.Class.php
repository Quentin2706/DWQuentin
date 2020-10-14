<?php

 Class Livre extends Document {
	/***************************************** Attributs **********************************************/

	private $_nombreDePages ;

	/***************************************** Accesseurs **********************************************/
	public function getNombreDePages()
	{
		return $this->_nombreDePages;
	}

	public function setNombreDePages(string $nombredepages)
	{
		$this->_nombreDePages = $nombredepages;
	}

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		parent::__Construct($options);
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
	public function toString(){			// ON AFFICHE LES INFOS SUR LE LIVRE
		return " titre : ".$this->getTitre()	." auteur : ".$this->getAuteur()	." nombredepages : ".$this->getNombreDePages()	;
	}

}