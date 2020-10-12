<?php

 Class MonstreFacile {
	/***************************************** Attributs **********************************************/

	private $_etatMonstre = true ;
	private static $_compteur = 0;
	/***************************************** Accesseurs **********************************************/
	
	public function getEtatMonstre()
	{
		return $this->_etatMonstre;
	}

	public function setEtatMonstre($etatMonstre)
	{
		$this->_etatMonstre = $etatMonstre;
	}
	public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }
	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
		self::setCompteur(self::getCompteur() + 1); //on increment le compteur
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
	public function attaque($joueur, $HPaenlever)		 // enleve le nombre de point de vie au joueur si le monstre obtient un nombre supérieur au joueur
	{
		return $joueur -> setHP($joueur->getHP() - $HPaenlever);
	}

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return " etatMonstre : ".$this->getEtatMonstre()	;
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