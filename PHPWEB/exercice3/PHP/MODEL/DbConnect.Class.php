<?php

class DbConnect {
	private static $db;

	public static function getDb() {
		return Dbconnect::$db;
	}

	public static function init() {
		try {
			self::$db= new PDO ('mysql:host=localhost;dbname=exercice3copie; charset=UTF8' , "etudiantApp", "etudiantApp");
		} catch (Exception $e) {
			die ( 'Erreur : ' . $e->getMessage () );
		}
	}
}