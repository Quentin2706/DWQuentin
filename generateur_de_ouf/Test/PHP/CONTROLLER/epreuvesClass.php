<?php

class Epreuves 
{

	/*****************Attributs***************** */

	private $_idEpreuve;
	private $_libelleEpreuve;
	private $_idEnseignantEpreuve;
	private $_idMatiereEpreuve;
	private $_dateEpreuve;
	private $_CoefficientEpreuve;
	private $_anneeEpreuve;

	/***************** Accesseurs ***************** */


	public function getIdEpreuve()
	{
		return $this->_idEpreuve;
	}

	public function setIdEpreuve($idEpreuve)
	{
		$this->_idEpreuve=$idEpreuve;
	}

	public function getLibelleEpreuve()
	{
		return $this->_libelleEpreuve;
	}

	public function setLibelleEpreuve($libelleEpreuve)
	{
		$this->_libelleEpreuve=$libelleEpreuve;
	}

	public function getIdEnseignantEpreuve()
	{
		return $this->_idEnseignantEpreuve;
	}

	public function setIdEnseignantEpreuve($idEnseignantEpreuve)
	{
		$this->_idEnseignantEpreuve=$idEnseignantEpreuve;
	}

	public function getIdMatiereEpreuve()
	{
		return $this->_idMatiereEpreuve;
	}

	public function setIdMatiereEpreuve($idMatiereEpreuve)
	{
		$this->_idMatiereEpreuve=$idMatiereEpreuve;
	}

	public function getDateEpreuve()
	{
		return $this->_dateEpreuve;
	}

	public function setDateEpreuve($dateEpreuve)
	{
		$this->_dateEpreuve=$dateEpreuve;
	}

	public function getCoefficientEpreuve()
	{
		return $this->_CoefficientEpreuve;
	}

	public function setCoefficientEpreuve($CoefficientEpreuve)
	{
		$this->_CoefficientEpreuve=$CoefficientEpreuve;
	}

	public function getAnneeEpreuve()
	{
		return $this->_anneeEpreuve;
	}

	public function setAnneeEpreuve($anneeEpreuve)
	{
		$this->_anneeEpreuve=$anneeEpreuve;
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
		return "IdEpreuve : ".$this->getIdEpreuve()."LibelleEpreuve : ".$this->getLibelleEpreuve()."IdEnseignantEpreuve : ".$this->getIdEnseignantEpreuve()."IdMatiereEpreuve : ".$this->getIdMatiereEpreuve()."DateEpreuve : ".$this->getDateEpreuve()."CoefficientEpreuve : ".$this->getCoefficientEpreuve()."AnneeEpreuve : ".$this->getAnneeEpreuve()."\n";
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