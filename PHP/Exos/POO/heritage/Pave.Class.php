<?php

class Pave extends Rectangle
{

	/*****************Attributs***************** */
	private $_hauteur;

	/*****************Accesseurs***************** */
	public function getHauteur()
	{
		return $this->_hauteur;
	}

	public function setHauteur($hauteur)
	{
		$this->_hauteur = $hauteur;
	}
	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
		parent::__construct($options);
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */
public function volume()
{
	return parent::aire*$this->getHauteur();
}
public function perimetre()
{
	return (2*($this->getLongueur()*$this->getLargeur())+(2*($this->getLargeur()*$this->getHauteur()))+(2*($this->getLongueur()*$this->getHauteur())));
}
	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String.
	*/
	public function afficherPave()
	{
		return "Surface Totale : [".$this->perimetre() . "] - Volume : [".$this->volume(). "]"; 
	}
	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo ($obj)
	{
		return true;
	}
	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*		0 si ils sont égaux
	*		-1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return void
	*/
	public function compareTo ($obj1, $obj2)
	{
		return 0;
	}
}