<?php

class DbConnect {
	private static $db;

	public static function getDb() {
		return Dbconnect::$db;
	}

	public static function init() {
		try {
			self::$db= new PDO ('mysql:host=localhost;dbname=baseproduits; charset=UTF8' , "produitsApp", "produitsApp");
		} catch (Exception $e) {
			die ( 'Erreur : ' . $e->getMessage () );
		}
	}
}