<?php

class Fille1 implements Fille2,Fille3
{

	/*****************Attributs***************** */


	/*****************Accesseurs***************** */

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
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */
	// public function toString()
	// {

	// }
	public function test()
	{
		return ;
	}
	// public function toString()
	// {
	// 	return ;
	// }
}