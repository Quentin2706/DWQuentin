<?php

 Class EnregistrementAudio extends Document {
	/***************************************** Attributs **********************************************/

	private $_duree ;

	/***************************************** Accesseurs **********************************************/
	
	public function getDuree()
	{
		return $this->_duree;
	}

	public function setDuree(string $duree)
	{
		$this->_duree = $duree;
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
	public function toString(){			// ON AFFICHE LES INFOS SUR L'ENREGISTREMENT AUDIO
		return " titre : ".$this->getTitre()	." auteur : ".$this->getAuteur()	." duree : ".$this->getDuree()	;
	}

}