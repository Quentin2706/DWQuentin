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
	"TestElevesManager"=>["PHP/MODEL/TESTMANAGER/","TestElevesManager","Test de eleves"],
	"TestMatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestMatieresManager","Test de matieres"],
	"TestSuivisManager"=>["PHP/MODEL/TESTMANAGER/","TestSuivisManager","Test de suivis"],
	"TestUtilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestUtilisateursManager","Test de utilisateurs"],
	"ListeEleve"=>["PHP/VIEW/","ListeEleve","Liste des eleves"],
	"FormEleve"=>["PHP/VIEW/","FormEleve","Form des eleves"],
	"ActionsEleve"=>["PHP/VIEW/","ActionsEleve","xxx"],
	"ListeMatiere"=>["PHP/VIEW/","ListeMatiere","Liste des matieres"],
	"FormMatiere"=>["PHP/VIEW/","FormMatiere","Form des matieres"],
	"ActionsMatiere"=>["PHP/VIEW/","ActionsMatiere","xxx"],
	"ListeEnseignant"=>["PHP/VIEW/","ListeEnseignant","Liste des enseignants"],
	"FormEnseignant"=>["PHP/VIEW/","FormEnseignant","Form des enseignants"],
	"ActionsEnseignant"=>["PHP/VIEW/","ActionsEnseignant","xxx"],
	"ListeSuivi"=>["PHP/VIEW/","ListeSuivi","Liste des suivis"],
	"FormSuivi"=>["PHP/VIEW/","FormSuivi","Form des suivis"],
	"ActionsSuivi"=>["PHP/VIEW/","ActionsSuivi","xxx"],
	"FormConnexion"=>["PHP/VIEW/","FormConnexion","Form de connexion"],
	"ActionsConnexion"=>["PHP/VIEW/","ActionsConnexion","xxx"],
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