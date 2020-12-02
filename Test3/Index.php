<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","accueil","Accueil"],
	"TestActeursManager"=>["PHP/MODEL/TESTMANAGER/","TestActeursManager","Test de acteurs"],
	"Testfilms"=>["PHP/VIEW/","Testfilms","Test de films"],
	"Testgenres"=>["PHP/VIEW/","Testgenres","Test de genres"],
	"Testparticipations"=>["PHP/VIEW/","Testparticipations","Test de participations"],
	"Testrealisateurs"=>["PHP/VIEW/","Testrealisateurs","Test de realisateurs"],
	"Testrealisations"=>["PHP/VIEW/","Testrealisations","Test de realisations"],
	"Teststudios"=>["PHP/VIEW/","Teststudios","Test de studios"],
	"Testtraductions"=>["PHP/VIEW/","Testtraductions","Test de traductions"],
	"Testutilisateurs"=>["PHP/VIEW/","Testutilisateurs","Test de utilisateurs"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}