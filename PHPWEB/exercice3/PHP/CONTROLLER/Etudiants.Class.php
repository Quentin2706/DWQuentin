<?php

 Class Etudiants {
	/***************************************** Attributs **********************************************/

	private $_idEtudiant ;
	private $_nomEtudiant ;
	private $_prenomEtudiant ;
	private $_adresseEtudiant ;
	private $_villeEtudiant ;

	/***************************************** Accesseurs **********************************************/
	
	public function getIdEtudiant()
	{
		return $this->_idEtudiant;
	}

	public function setIdEtudiant($idEtudiant)
	{
		$this->_idEtudiant = $idEtudiant;
	}
	public function getNomEtudiant()
	{
		return $this->_nomEtudiant;
	}

	public function setNomEtudiant($nomEtudiant)
	{
		$this->_nomEtudiant = $nomEtudiant;
	}
	public function getPrenomEtudiant()
	{
		return $this->_prenomEtudiant;
	}

	public function setPrenomEtudiant($prenomEtudiant)
	{
		$this->_prenomEtudiant = $prenomEtudiant;
	}
	public function getAdresseEtudiant()
	{
		return $this->_adresseEtudiant;
	}

	public function setAdresseEtudiant($adresseEtudiant)
	{
		$this->_adresseEtudiant = $adresseEtudiant;
	}
	public function getVilleEtudiant()
	{
		return $this->_villeEtudiant;
	}

	public function setVilleEtudiant($villeEtudiant)
	{
		$this->_villeEtudiant = $villeEtudiant;
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
	public function toString(){
		return " idEtudiant : ".$this->getIdEtudiant()	." nomEtudiant : ".$this->getNomEtudiant()	." prenomEtudiant : ".$this->getPrenomEtudiant()	." adresseEtudiant : ".$this->getAdresseEtudiant()	." villeEtudiant : ".$this->getVilleEtudiant()	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*        -1 si le 1er est <
	*
	* @param [type] obj1
	* @param [type] obj2
	* @return void
	*/
	public function compareTo(){
		return "";
	}

}