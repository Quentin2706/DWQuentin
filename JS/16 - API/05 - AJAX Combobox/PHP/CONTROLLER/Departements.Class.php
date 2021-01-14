<?php

class Departements 
{

	/*****************Attributs***************** */

	private $_idDepartement;
	private $_LibelleDepartement;
	private $_IdRegion;

	/***************** Accesseurs ***************** */


	public function getIdDepartement()
	{
		return $this->_idDepartement;
	}

	public function setIdDepartement($idDepartement)
	{
		$this->_idDepartement=$idDepartement;
	}

	public function getLibelleDepartement()
	{
		return $this->_LibelleDepartement;
	}

	public function setLibelleDepartement($LibelleDepartement)
	{
		$this->_LibelleDepartement=$LibelleDepartement;
	}

	public function getIdRegion()
	{
		return $this->_IdRegion;
	}

	public function setIdRegion($IdRegion)
	{
		$this->_IdRegion=$IdRegion;
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
		return "IdDepartement : ".$this->getIdDepartement()."LibelleDepartement : ".$this->getLibelleDepartement()."IdRegion : ".$this->getIdRegion()."\n";
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