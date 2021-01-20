<?php

class Texte
{

	/***************** Attributs ******************/
	private $_idTexte;
	private $_codeTexte;
	private $_codeLangue;
	private $_texte;

	/***************** Accesseurs ******************/

	public function getIdTexte()
	{
		return $this->_idTexte;
	}

	public function setIdTexte($idTexte)
	{
		return $this->_idTexte=$idTexte;
	}

	public function getCodeTexte()
	{
		return $this->_codeTexte;
	}

	public function setCodeTexte($codeTexte)
	{
		return $this->_codeTexte=$codeTexte;
	}

	public function getCodeLangue()
	{
		return $this->_codeLangue;
	}

	public function setCodeLangue($codeLangue)
	{
		return $this->_codeLangue=$codeLangue;
	}

	public function getTexte()
	{
		return $this->_texte;
	}

	public function setTexte($texte)
	{
		return $this->_texte=$texte;
	}
	/*****************Constructeur******************/

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


	public function toString()
	{
		return "IdTexte : ".$this->getIdTexte()."CodeTexte : ".$this->getCodeTexte()."CodeLangue : ".$this->getCodeLangue()."Texte : ".$this->getTexte()."\n";
	}
}