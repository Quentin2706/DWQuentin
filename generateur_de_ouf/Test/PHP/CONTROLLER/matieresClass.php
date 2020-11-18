<?php

class Matieres 
{

	/*****************Attributs***************** */

	private $_idMatiere;
	private $_nomMatiere;
	private $_idModule;
	private $_coefficientMatiere;

	/***************** Accesseurs ***************** */


	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
	}

	public function getNomMatiere()
	{
		return $this->_nomMatiere;
	}

	public function setNomMatiere($nomMatiere)
	{
		$this->_nomMatiere=$nomMatiere;
	}

	public function getIdModule()
	{
		return $this->_idModule;
	}

	public function setIdModule($idModule)
	{
		$this->_idModule=$idModule;
	}

	public function getCoefficientMatiere()
	{
		return $this->_coefficientMatiere;
	}

	public function setCoefficientMatiere($coefficientMatiere)
	{
		$this->_coefficientMatiere=$coefficientMatiere;
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
		return "IdMatiere : ".$this->getIdMatiere()."NomMatiere : ".$this->getNomMatiere()."IdModule : ".$this->getIdModule()."CoefficientMatiere : ".$this->getCoefficientMatiere()."\n";
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