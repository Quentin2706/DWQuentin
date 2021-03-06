<?php

class Acteurs 
{

	/*****************Attributs***************** */

	private $_idActeur;
	private $_nomActeur;
	private $_prenomActeur;
	private $_origineActeur;
	private $_dateDeNaissanceActeur;

	/***************** Accesseurs ***************** */


	public function getIdActeur()
	{
		return $this->_idActeur;
	}

	public function setIdActeur($idActeur)
	{
		$this->_idActeur=$idActeur;
	}

	public function getNomActeur()
	{
		return $this->_nomActeur;
	}

	public function setNomActeur($nomActeur)
	{
		$this->_nomActeur=$nomActeur;
	}

	public function getPrenomActeur()
	{
		return $this->_prenomActeur;
	}

	public function setPrenomActeur($prenomActeur)
	{
		$this->_prenomActeur=$prenomActeur;
	}

	public function getOrigineActeur()
	{
		return $this->_origineActeur;
	}

	public function setOrigineActeur($origineActeur)
	{
		$this->_origineActeur=$origineActeur;
	}

	public function getDateDeNaissanceActeur()
	{
		return $this->_dateDeNaissanceActeur;
	}

	public function setDateDeNaissanceActeur($dateDeNaissanceActeur)
	{
		$this->_dateDeNaissanceActeur=$dateDeNaissanceActeur;
	}

	/*****************Constructeur***************** */

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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdActeur : ".$this->getIdActeur()."NomActeur : ".$this->getNomActeur()."PrenomActeur : ".$this->getPrenomActeur()."OrigineActeur : ".$this->getOrigineActeur()."DateDeNaissanceActeur : ".$this->getDateDeNaissanceActeur()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}