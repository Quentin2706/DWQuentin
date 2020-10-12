<?php

 Class Joueur {
	/***************************************** Attributs **********************************************/
	private $_hp=50;
	private $_bouclier=0;

	/***************************************** Accesseurs **********************************************/
	
	public function getHp()
	{
		return $this->_hp;
	}

	public function setHp($hp)
	{
		$this->_hp = $hp;
	}

	public function getBouclier()
	{
		return $this->_bouclier;
	}

	public function setBouclier($bouclier)
	{
		$this->_bouclier = $bouclier;
	}

	/***************************************** Constructeur **********************************************/

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
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/***************************************** Methode **********************************************/
	public function estVivant()			 // On regarde si le joueur à une vie STRICTEMENT supérieure a 0
	{
		return ($this->getHp() > 0);
	}
	
	public function Attaque($monstre)		// on attaque le monstre si celui si à un nombre inférieur au joueur
	{
		$etatmonstre = false;
		return $monstre->setEtatMonstre($etatmonstre);
	}
	public function subitsDegats($resultmonstre)	
	{
		$this -> setHp($this->getHp() - $resultmonstre);
	}
	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return " HP : ".$this->getHp()	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*        -1 si le 1er est <
	*
	* @param [type] obj1
	* @param [type] obj2
	* @return void
	*/
	public function compareTo(){
		return "";
	}
}