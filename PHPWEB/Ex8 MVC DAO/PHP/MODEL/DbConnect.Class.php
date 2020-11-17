<?php

class DbConnect {
	private static $db;

	public static function getDb() {
		return Dbconnect::$db;
	}

	public static function init() {
		try {
			self::$db= new PDO ('mysql:host=localhost;dbname=baseProduits; charset=utf-8', 'produitsApp', 'produitsApp');
		} catch (Exception $e) {
			die ( 'Erreur : ' . $e->getMessage () );
		}
	}
}