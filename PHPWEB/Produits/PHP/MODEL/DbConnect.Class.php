<?php
class DbConnect{
	private static $db;

	public static function getDb()
	{
		return DbConnect::$db;
	}

	public static function init()
	{
		try {
			self::$db= new PDO ( 'mysql:host=localhost;dbname=baseproduits;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			die('Erreur :'. $e->getMessage());
		}
	}
}