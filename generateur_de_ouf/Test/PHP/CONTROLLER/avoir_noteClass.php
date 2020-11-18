<?php

class Avoir_note 
{

	/*****************Attributs***************** */

	private $_idAvoirNote;
	private $_idEtudiant;
	private $_idEpreuve;
	private $_note;

	/***************** Accesseurs ***************** */


	public function getIdAvoirNote()
	{
		return $this->_idAvoirNote;
	}

	public function setIdAvoirNote($idAvoirNote)
	{
		$this->_idAvoirNote=$idAvoirNote;
	}

	public function getIdEtudiant()
	{
		return $this->_idEtudiant;
	}

	public function setIdEtudiant($idEtudiant)
	{
		$this->_idEtudiant=$idEtudiant;
	}

	public function getIdEpreuve()
	{
		return $this->_idEpreuve;
	}

	public function setIdEpreuve($idEpreuve)
	{
		$this->_idEpreuve=$idEpreuve;
	}

	public function getNote()
	{
		return $this->_note;
	}

	public function setNote($note)
	{
		$this->_note=$note;
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
		return "IdAvoirNote : ".$this->getIdAvoirNote()."IdEtudiant : ".$this->getIdEtudiant()."IdEpreuve : ".$this->getIdEpreuve()."Note : ".$this->getNote()."\n";
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