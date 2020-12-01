<?php

 Class Utilisateurs {
	/***************************************** Attributs **********************************************/

	private $_idUtilisateur ;
	private $_nomUtilisateur ;
	private $_prenomUtilisateur ;
	private $_mdpUtilisateur ;
	private $_emailUtilisateur ;
	private $_roleUtilisateur ;
	private $_pseudoUtilisateur ;

	/***************************************** Accesseurs **********************************************/
	
	public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur = $idUtilisateur;
	}
	public function getNomUtilisateur()
	{
		return $this->_nomUtilisateur;
	}

	public function setNomUtilisateur($nomUtilisateur)
	{
		$this->_nomUtilisateur = $nomUtilisateur;
	}
	public function getPrenomUtilisateur()
	{
		return $this->_prenomUtilisateur;
	}

	public function setPrenomUtilisateur($prenomUtilisateur)
	{
		$this->_prenomUtilisateur = $prenomUtilisateur;
	}
	public function getMdpUtilisateur()
	{
		return $this->_mdpUtilisateur;
	}

	public function setMdpUtilisateur($mdpUtilisateur)
	{
		$this->_mdpUtilisateur = $mdpUtilisateur;
	}
	public function getEmailUtilisateur()
	{
		return $this->_emailUtilisateur;
	}

	public function setEmailUtilisateur($emailUtilisateur)
	{
		$this->_emailUtilisateur = $emailUtilisateur;
	}
	public function getRoleUtilisateur()
	{
		return $this->_roleUtilisateur;
	}

	public function setRoleUtilisateur($roleUtilisateur)
	{
		$this->_roleUtilisateur = $roleUtilisateur;
	}
	public function getPseudoUtilisateur()
	{
		return $this->_pseudoUtilisateur;
	}

	public function setPseudoUtilisateur($pseudoUtilisateur)
	{
		$this->_pseudoUtilisateur = $pseudoUtilisateur;
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

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return " idUtilisateur : ".$this->getIdUtilisateur()	." nomUtilisateur : ".$this->getNomUtilisateur()	." prenomUtilisateur : ".$this->getPrenomUtilisateur()	." mdpUtilisateur : ".$this->getMdpUtilisateur()	." emailUtilisateur : ".$this->getEmailUtilisateur()	." roleUtilisateur : ".$this->getRoleUtilisateur()	." pseudoUtilisateur : ".$this->getPseudoUtilisateur()	;
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