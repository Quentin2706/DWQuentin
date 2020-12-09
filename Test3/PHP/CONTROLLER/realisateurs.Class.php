<?php

class Realisateurs 
{

	/*****************Attributs***************** */

	private $_idRealisateur;
	private $_nomRealisateur;
	private $_prenomRealisateur;
	private $_dateDeNaissanceRealisateur;
	private $_paysOrigineRealisateur;

	/***************** Accesseurs ***************** */


	public function getIdRealisateur()
	{
		return $this->_idRealisateur;
	}

	public function setIdRealisateur($idRealisateur)
	{
		$this->_idRealisateur=$idRealisateur;
	}

	public function getNomRealisateur()
	{
		return $this->_nomRealisateur;
	}

	public function setNomRealisateur($nomRealisateur)
	{
		$this->_nomRealisateur=$nomRealisateur;
	}

	public function getPrenomRealisateur()
	{
		return $this->_prenomRealisateur;
	}

	public function setPrenomRealisateur($prenomRealisateur)
	{
		$this->_prenomRealisateur=$prenomRealisateur;
	}

	public function getDateDeNaissanceRealisateur()
	{
		return $this->_dateDeNaissanceRealisateur;
	}

	public function setDateDeNaissanceRealisateur($dateDeNaissanceRealisateur)
	{
		$this->_dateDeNaissanceRealisateur=$dateDeNaissanceRealisateur;
	}

	public function getPaysOrigineRealisateur()
	{
		return $this->_paysOrigineRealisateur;
	}

	public function setPaysOrigineRealisateur($paysOrigineRealisateur)
	{
		$this->_paysOrigineRealisateur=$paysOrigineRealisateur;
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
		return "IdRealisateur : ".$this->getIdRealisateur()."NomRealisateur : ".$this->getNomRealisateur()."PrenomRealisateur : ".$this->getPrenomRealisateur()."DateDeNaissanceRealisateur : ".$this->getDateDeNaissanceRealisateur()."PaysOrigineRealisateur : ".$this->getPaysOrigineRealisateur()."\n";
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