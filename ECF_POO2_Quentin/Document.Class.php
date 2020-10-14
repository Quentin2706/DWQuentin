<?php

 Class Document {
	/***************************************** Attributs **********************************************/

	private $_auteur ;
	private $_titre ;
	private $_emprunte ;
	private $_typeDoc ; 
	private $_infoDivers ;
	
	/***************************************** Accesseurs **********************************************/
	
	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function setAuteur(Auteur $auteur)
	{
		$this->_auteur = $auteur;
	}
	public function getTitre()
	{
		return $this->_titre;
	}

	public function setTitre(string $titre)
	{
		$this->_titre = $titre;
	}
	public function getEmprunte()
	{
		return $this->_emprunte;
	}

	public function setEmprunte(string $emprunte)
	{
		$this->_emprunte = ucfirst($emprunte);
	}

	public function getTypeDoc()
	{
		return $this->_typeDoc;
	}

	public function setTypeDoc(string $typedoc)
	{
		$this->_typeDoc = ucfirst($typedoc);
	}
	public function getInfoDivers()
	{
		return $this->_infoDivers;
	}

	public function setInfoDivers($infoDivers)
	{
		$this->_infoDivers = $infoDivers;
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
	public function estEmprunte()			// ON VERIFIE SI IL EST EMPRUNTE OU NON
	{
		if($this->getEmprunte() == "Oui")
		{
			return true;
		} else {
			return false;
		}
	}
	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){						// AFFICHAGE DES DIFFERENTS INFOS
		$aff ="\n";
		$aff .= "\nType de document : ".$this->getTypeDoc();
		$aff .= "\nTitre : ".$this->getTitre();
		$aff .= $this->getTypeDoc() == "Livre" ? "\nNombres de pages : ". $this->getInfoDivers() : "";
		$aff .= $this->getTypeDoc() == "Video" ? "\nSous-Titres : ". $this->getInfoDivers() : "";
		$aff .= $this->getTypeDoc() == "Enregistrement Audio" ? "\nDuree : ". $this->getInfoDivers() : "";
		// if($this->getTypeDoc() == "Livre")
		// {
		// 	if($this->_infodivers == NULL)
		// 	{
		// 		"\nNombres de pages : ". $this->getInfoDivers()
		// 	}
		// }
		$aff .= "\n===== Auteur du document : ".$this->getTypeDoc(). " =====";
		$aff .= $this->getAuteur()->toString();
		$aff .= "\n ==============";
		$this->estEmprunte() ? $aff.= "\nDisponible : Non" : $aff.= "\nDisponible : Oui";
		return $aff;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(Document $obj){				// ON REGARDE SI LES DEUX OBJETS SONT EGAUX
		if($this->getTypeDoc() == $obj->getTypeDoc())
		{
		if($this ->getAuteur() == $obj ->getAuteur())
		{
			if($this->getTitre() == $obj->getTitre())
			{
				return true;
			}
			return false;
		}
		return false;
	}
	return false;
}

}