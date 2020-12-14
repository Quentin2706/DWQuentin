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
	"TestconsultationsManager"=>["PHP/MODEL/TESTMANAGER/","TestconsultationsManager","Test de consultations"],
	"TestcontenantsManager"=>["PHP/MODEL/TESTMANAGER/","TestcontenantsManager","Test de contenants"],
	"TestingredientsManager"=>["PHP/MODEL/TESTMANAGER/","TestingredientsManager","Test de ingredients"],
	"TestproduitsManager"=>["PHP/MODEL/TESTMANAGER/","TestproduitsManager","Test de produits"],
	"TesttraductionsManager"=>["PHP/MODEL/TESTMANAGER/","TesttraductionsManager","Test de traductions"],
	"TestusersManager"=>["PHP/MODEL/TESTMANAGER/","TestusersManager","Test de users"],
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