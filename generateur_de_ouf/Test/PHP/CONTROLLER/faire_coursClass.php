<?php

class Faire_cours 
{

	/*****************Attributs***************** */

	private $_idFaireCours;
	private $_idEnseignant;
	private $_idMatiere;
	private $_annee;

	/***************** Accesseurs ***************** */


	public function getIdFaireCours()
	{
		return $this->_idFaireCours;
	}

	public function setIdFaireCours($idFaireCours)
	{
		$this->_idFaireCours=$idFaireCours;
	}

	public function getIdEnseignant()
	{
		return $this->_idEnseignant;
	}

	public function setIdEnseignant($idEnseignant)
	{
		$this->_idEnseignant=$idEnseignant;
	}

	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
	}

	public function getAnnee()
	{
		return $this->_annee;
	}

	public function setAnnee($annee)
	{
		$this->_annee=$annee;
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
		return "IdFaireCours : ".$this->getIdFaireCours()."IdEnseignant : ".$this->getIdEnseignant()."IdMatiere : ".$this->getIdMatiere()."Annee : ".$this->getAnnee()."\n";
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