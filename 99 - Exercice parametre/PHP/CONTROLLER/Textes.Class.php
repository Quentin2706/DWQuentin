<?php

class Textes 
{

	/*****************Attributs***************** */

	private $_idTexte;
	private $_codeTexte;
	private $_codeLangue;
	private $_texte;

	/***************** Accesseurs ***************** */


	public function getIdTexte()
	{
		return $this->_idTexte;
	}

	public function setIdTexte($idTexte)
	{
		$this->_idTexte=$idTexte;
	}

	public function getCodeTexte()
	{
		return $this->_codeTexte;
	}

	public function setCodeTexte($codeTexte)
	{
		$this->_codeTexte=$codeTexte;
	}

	public function getCodeLangue()
	{
		return $this->_codeLangue;
	}

	public function setCodeLangue($codeLangue)
	{
		$this->_codeLangue=$codeLangue;
	}

	public function getTexte()
	{
		return $this->_texte;
	}

	public function setTexte($texte)
	{
		$this->_texte = $texte;
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
		return "IdTexte : ".$this->getIdTexte()."CodeTexte : ".$this->getCodeTexte()."CodeLangue : ".$this->getCodeLangue()."Texte : ".$this->getTexte()."\n";
	}


	
}