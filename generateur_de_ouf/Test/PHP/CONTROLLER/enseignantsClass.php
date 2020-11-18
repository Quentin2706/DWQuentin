<?php

class Enseignants 
{

	/*****************Attributs***************** */

	private $_idEnseignant;
	private $_nomEnseignant;
	private $_prenomEnseignant;
	private $_fonctionEnseignant;
	private $_adresseEnseignant;
	private $_villeEnseignant;
	private $_codePostalEnseignant;
	private $_telephoneEnseignant;
	private $_dateNaissanceEnseignant;
	private $_dateEmbaucheEnseignant;

	/***************** Accesseurs ***************** */


	public function getIdEnseignant()
	{
		return $this->_idEnseignant;
	}

	public function setIdEnseignant($idEnseignant)
	{
		$this->_idEnseignant=$idEnseignant;
	}

	public function getNomEnseignant()
	{
		return $this->_nomEnseignant;
	}

	public function setNomEnseignant($nomEnseignant)
	{
		$this->_nomEnseignant=$nomEnseignant;
	}

	public function getPrenomEnseignant()
	{
		return $this->_prenomEnseignant;
	}

	public function setPrenomEnseignant($prenomEnseignant)
	{
		$this->_prenomEnseignant=$prenomEnseignant;
	}

	public function getFonctionEnseignant()
	{
		return $this->_fonctionEnseignant;
	}

	public function setFonctionEnseignant($fonctionEnseignant)
	{
		$this->_fonctionEnseignant=$fonctionEnseignant;
	}

	public function getAdresseEnseignant()
	{
		return $this->_adresseEnseignant;
	}

	public function setAdresseEnseignant($adresseEnseignant)
	{
		$this->_adresseEnseignant=$adresseEnseignant;
	}

	public function getVilleEnseignant()
	{
		return $this->_villeEnseignant;
	}

	public function setVilleEnseignant($villeEnseignant)
	{
		$this->_villeEnseignant=$villeEnseignant;
	}

	public function getCodePostalEnseignant()
	{
		return $this->_codePostalEnseignant;
	}

	public function setCodePostalEnseignant($codePostalEnseignant)
	{
		$this->_codePostalEnseignant=$codePostalEnseignant;
	}

	public function getTelephoneEnseignant()
	{
		return $this->_telephoneEnseignant;
	}

	public function setTelephoneEnseignant($telephoneEnseignant)
	{
		$this->_telephoneEnseignant=$telephoneEnseignant;
	}

	public function getDateNaissanceEnseignant()
	{
		return $this->_dateNaissanceEnseignant;
	}

	public function setDateNaissanceEnseignant($dateNaissanceEnseignant)
	{
		$this->_dateNaissanceEnseignant=$dateNaissanceEnseignant;
	}

	public function getDateEmbaucheEnseignant()
	{
		return $this->_dateEmbaucheEnseignant;
	}

	public function setDateEmbaucheEnseignant($dateEmbaucheEnseignant)
	{
		$this->_dateEmbaucheEnseignant=$dateEmbaucheEnseignant;
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
		return "IdEnseignant : ".$this->getIdEnseignant()."NomEnseignant : ".$this->getNomEnseignant()."PrenomEnseignant : ".$this->getPrenomEnseignant()."FonctionEnseignant : ".$this->getFonctionEnseignant()."AdresseEnseignant : ".$this->getAdresseEnseignant()."VilleEnseignant : ".$this->getVilleEnseignant()."CodePostalEnseignant : ".$this->getCodePostalEnseignant()."TelephoneEnseignant : ".$this->getTelephoneEnseignant()."DateNaissanceEnseignant : ".$this->getDateNaissanceEnseignant()."DateEmbaucheEnseignant : ".$this->getDateEmbaucheEnseignant()."\n";
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