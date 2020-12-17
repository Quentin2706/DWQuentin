<?php

// Ce fichier sera inclus à chaque fois que l'on aura besoin d'acceder à la base de données.
// Il permet d'ouvrir la connection à la base de données
class DbConnect {
	private static $db;
	
	public static function getDb() {
		return DbConnect::$db;
	}

	public static function init() {
		try {
			// On se connecte à MySQL

			// methode sans parametre.ini
			/*self::$db= new PDO ( 'mysql:host=localhost;dbname=projetFilms;charset=utf8', 'root', '');*/

			//methode avec le parametre.ini
			self::$db=new PDO ('mysql:host='.Parametres::getHost().'; port='.Parametres::getPort().' ;dbname='.Parametres::getDbname().';charset=utf8',Parametres::getLogin(),Parametres::getPwd());

		} catch ( Exception $e ) {
			// En cas d'erreur, on affiche un message et on arrète tout
			die ( 'Erreur : ' . $e->getMessage () );
		}
		
	}
}