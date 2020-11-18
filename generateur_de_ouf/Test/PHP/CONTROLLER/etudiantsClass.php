<?php

class Etudiants 
{

	/*****************Attributs***************** */

	private $_idEtudiant;
	private $_nomEtudiant;
	private $_prenomEtudiant;
	private $_adresseEtudiant;
	private $_villeEtudiant;
	private $_codePostalEtudiant;
	private $_telephoneEtudiant;
	private $_dateEntreeEtudiant;
	private $_anneeEtudiant;
	private $_remarqueEtudiant;
	private $_sexeEtudiant;
	private $_dateNaissanceEtudiant;
	private $_HOBBY;

	/***************** Accesseurs ***************** */


	public function getIdEtudiant()
	{
		return $this->_idEtudiant;
	}

	public function setIdEtudiant($idEtudiant)
	{
		$this->_idEtudiant=$idEtudiant;
	}

	public function getNomEtudiant()
	{
		return $this->_nomEtudiant;
	}

	public function setNomEtudiant($nomEtudiant)
	{
		$this->_nomEtudiant=$nomEtudiant;
	}

	public function getPrenomEtudiant()
	{
		return $this->_prenomEtudiant;
	}

	public function setPrenomEtudiant($prenomEtudiant)
	{
		$this->_prenomEtudiant=$prenomEtudiant;
	}

	public function getAdresseEtudiant()
	{
		return $this->_adresseEtudiant;
	}

	public function setAdresseEtudiant($adresseEtudiant)
	{
		$this->_adresseEtudiant=$adresseEtudiant;
	}

	public function getVilleEtudiant()
	{
		return $this->_villeEtudiant;
	}

	public function setVilleEtudiant($villeEtudiant)
	{
		$this->_villeEtudiant=$villeEtudiant;
	}

	public function getCodePostalEtudiant()
	{
		return $this->_codePostalEtudiant;
	}

	public function setCodePostalEtudiant($codePostalEtudiant)
	{
		$this->_codePostalEtudiant=$codePostalEtudiant;
	}

	public function getTelephoneEtudiant()
	{
		return $this->_telephoneEtudiant;
	}

	public function setTelephoneEtudiant($telephoneEtudiant)
	{
		$this->_telephoneEtudiant=$telephoneEtudiant;
	}

	public function getDateEntreeEtudiant()
	{
		return $this->_dateEntreeEtudiant;
	}

	public function setDateEntreeEtudiant($dateEntreeEtudiant)
	{
		$this->_dateEntreeEtudiant=$dateEntreeEtudiant;
	}

	public function getAnneeEtudiant()
	{
		return $this->_anneeEtudiant;
	}

	public function setAnneeEtudiant($anneeEtudiant)
	{
		$this->_anneeEtudiant=$anneeEtudiant;
	}

	public function getRemarqueEtudiant()
	{
		return $this->_remarqueEtudiant;
	}

	public function setRemarqueEtudiant($remarqueEtudiant)
	{
		$this->_remarqueEtudiant=$remarqueEtudiant;
	}

	public function getSexeEtudiant()
	{
		return $this->_sexeEtudiant;
	}

	public function setSexeEtudiant($sexeEtudiant)
	{
		$this->_sexeEtudiant=$sexeEtudiant;
	}

	public function getDateNaissanceEtudiant()
	{
		return $this->_dateNaissanceEtudiant;
	}

	public function setDateNaissanceEtudiant($dateNaissanceEtudiant)
	{
		$this->_dateNaissanceEtudiant=$dateNaissanceEtudiant;
	}

	public function getHOBBY()
	{
		return $this->_HOBBY;
	}

	public function setHOBBY($HOBBY)
	{
		$this->_HOBBY=$HOBBY;
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
		return "IdEtudiant : ".$this->getIdEtudiant()."NomEtudiant : ".$this->getNomEtudiant()."PrenomEtudiant : ".$this->getPrenomEtudiant()."AdresseEtudiant : ".$this->getAdresseEtudiant()."VilleEtudiant : ".$this->getVilleEtudiant()."CodePostalEtudiant : ".$this->getCodePostalEtudiant()."TelephoneEtudiant : ".$this->getTelephoneEtudiant()."DateEntreeEtudiant : ".$this->getDateEntreeEtudiant()."AnneeEtudiant : ".$this->getAnneeEtudiant()."RemarqueEtudiant : ".$this->getRemarqueEtudiant()."SexeEtudiant : ".$this->getSexeEtudiant()."DateNaissanceEtudiant : ".$this->getDateNaissanceEtudiant()."HOBBY : ".$this->getHOBBY()."\n";
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