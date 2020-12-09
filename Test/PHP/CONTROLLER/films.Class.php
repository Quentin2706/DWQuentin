<?php

class Films 
{

	/*****************Attributs***************** */

	private $_idFilm;
	private $_nomFilm;
	private $_dateFilm;
	private $_coutFilm;
	private $_dureeFilm;
	private $_synopFilm;
	private $_idStudio;
	private $_idGenre;

	/***************** Accesseurs ***************** */


	public function getIdFilm()
	{
		return $this->_idFilm;
	}

	public function setIdFilm($idFilm)
	{
		$this->_idFilm=$idFilm;
	}

	public function getNomFilm()
	{
		return $this->_nomFilm;
	}

	public function setNomFilm($nomFilm)
	{
		$this->_nomFilm=$nomFilm;
	}

	public function getDateFilm()
	{
		return $this->_dateFilm;
	}

	public function setDateFilm($dateFilm)
	{
		$this->_dateFilm=$dateFilm;
	}

	public function getCoutFilm()
	{
		return $this->_coutFilm;
	}

	public function setCoutFilm($coutFilm)
	{
		$this->_coutFilm=$coutFilm;
	}

	public function getDureeFilm()
	{
		return $this->_dureeFilm;
	}

	public function setDureeFilm($dureeFilm)
	{
		$this->_dureeFilm=$dureeFilm;
	}

	public function getSynopFilm()
	{
		return $this->_synopFilm;
	}

	public function setSynopFilm($synopFilm)
	{
		$this->_synopFilm=$synopFilm;
	}

	public function getIdStudio()
	{
		return $this->_idStudio;
	}

	public function setIdStudio($idStudio)
	{
		$this->_idStudio=$idStudio;
	}

	public function getIdGenre()
	{
		return $this->_idGenre;
	}

	public function setIdGenre($idGenre)
	{
		$this->_idGenre=$idGenre;
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
		return "IdFilm : ".$this->getIdFilm()."NomFilm : ".$this->getNomFilm()."DateFilm : ".$this->getDateFilm()."CoutFilm : ".$this->getCoutFilm()."DureeFilm : ".$this->getDureeFilm()."SynopFilm : ".$this->getSynopFilm()."IdStudio : ".$this->getIdStudio()."IdGenre : ".$this->getIdGenre()."\n";
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