<?php

class Modules 
{

	/*****************Attributs***************** */

	private $_idModule;
	private $_nomModule;
	private $_coefficientModule;

	/***************** Accesseurs ***************** */


	public function getIdModule()
	{
		return $this->_idModule;
	}

	public function setIdModule($idModule)
	{
		$this->_idModule=$idModule;
	}

	public function getNomModule()
	{
		return $this->_nomModule;
	}

	public function setNomModule($nomModule)
	{
		$this->_nomModule=$nomModule;
	}

	public function getCoefficientModule()
	{
		return $this->_coefficientModule;
	}

	public function setCoefficientModule($coefficientModule)
	{
		$this->_coefficientModule=$coefficientModule;
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
		return "IdModule : ".$this->getIdModule()."NomModule : ".$this->getNomModule()."CoefficientModule : ".$this->getCoefficientModule()."\n";
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