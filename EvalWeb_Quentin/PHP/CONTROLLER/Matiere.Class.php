<?php

class Matiere
{

	/*****************Attributs***************** */

	private $_idMatiere;
	private $_libelleMatiere;

	/***************** Accesseurs ***************** */


	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere(int $idMatiere)
	{
		$this->_idMatiere=$idMatiere;
	}

	public function getLibelleMatiere()
	{
		return $this->_libelleMatiere;
	}

	public function setLibelleMatiere($libelleMatiere)
	{
		$this->_libelleMatiere=$libelleMatiere;
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
		return "IdMatiere : ".$this->getIdMatiere()."LibelleMatiere : ".$this->getLibelleMatiere()."\n";
	}
}