<?php

class Genres 
{

	/*****************Attributs***************** */

	private $_idGenre;
	private $_libelleGenre;
	private $_descGenre;

	/***************** Accesseurs ***************** */


	public function getIdGenre()
	{
		return $this->_idGenre;
	}

	public function setIdGenre($idGenre)
	{
		$this->_idGenre=$idGenre;
	}

	public function getLibelleGenre()
	{
		return $this->_libelleGenre;
	}

	public function setLibelleGenre($libelleGenre)
	{
		$this->_libelleGenre=$libelleGenre;
	}

	public function getDescGenre()
	{
		return $this->_descGenre;
	}

	public function setDescGenre($descGenre)
	{
		$this->_descGenre=$descGenre;
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
		return "IdGenre : ".$this->getIdGenre()."LibelleGenre : ".$this->getLibelleGenre()."DescGenre : ".$this->getDescGenre()."\n";
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