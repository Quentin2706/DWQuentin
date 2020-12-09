<?php

class Realisations 
{

	/*****************Attributs***************** */

	private $_idRealisation;
	private $_idRealisateur;
	private $_idFilm;
	private $_dateDebutRealisation;
	private $_dateFinRealisation;

	/***************** Accesseurs ***************** */


	public function getIdRealisation()
	{
		return $this->_idRealisation;
	}

	public function setIdRealisation($idRealisation)
	{
		$this->_idRealisation=$idRealisation;
	}

	public function getIdRealisateur()
	{
		return $this->_idRealisateur;
	}

	public function setIdRealisateur($idRealisateur)
	{
		$this->_idRealisateur=$idRealisateur;
	}

	public function getIdFilm()
	{
		return $this->_idFilm;
	}

	public function setIdFilm($idFilm)
	{
		$this->_idFilm=$idFilm;
	}

	public function getDateDebutRealisation()
	{
		return $this->_dateDebutRealisation;
	}

	public function setDateDebutRealisation($dateDebutRealisation)
	{
		$this->_dateDebutRealisation=$dateDebutRealisation;
	}

	public function getDateFinRealisation()
	{
		return $this->_dateFinRealisation;
	}

	public function setDateFinRealisation($dateFinRealisation)
	{
		$this->_dateFinRealisation=$dateFinRealisation;
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
		return "IdRealisation : ".$this->getIdRealisation()."IdRealisateur : ".$this->getIdRealisateur()."IdFilm : ".$this->getIdFilm()."DateDebutRealisation : ".$this->getDateDebutRealisation()."DateFinRealisation : ".$this->getDateFinRealisation()."\n";
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