<?php

require "./Outils.php";

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes = [
    "default" => ["PHP/VIEW/", "accueil", "Accueil", false],
    "TestdepartementsManager" => ["PHP/MODEL/TESTMANAGER/", "TestdepartementsManager", "Test de departements", false],
    "TestregionsManager" => ["PHP/MODEL/TESTMANAGER/", "TestregionsManager", "Test de regions", false],
    "ListeRegions" => ["PHP/MODEL/", "ListeRegions", "xxx", true],
    "ListeDept" => ["PHP/MODEL/", "ListeDept", "xxx", true],
];

if (isset($_GET["page"])) {

    $page = $_GET["page"];

    if (isset($routes[$page])) {
        AfficherPage($routes[$page]);
    } else {
        AfficherPage($routes["default"]);
    }
} else {
    AfficherPage($routes["default"]);
}
