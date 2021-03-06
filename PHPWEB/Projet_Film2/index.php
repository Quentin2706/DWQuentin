<?php
function crypte($mot)
{
    return md5(md5($mot.md5($mot)).(strlen($mot)*pow((pi()-0.31),strlen($mot))).(strlen($mot)*sqrt(strlen($mot)*(pi()*1.894))));
}


function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include 'PHP/VIEW/Nav.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

Parametres::init();

DbConnect::init();

session_start();

/***************************GESTION DES LANGUES ******************/
// on recupere la langue de l'URL
if (isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}

//on prend la langue de la session sinon FR par défaut
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';

/**
 * fonction qui ramène le texte dans la bonne langue
 */
function texte($codetexte)
{
    global $lang; //on appel la variable globale
    return TexteManager::findByCodes($lang, $codetexte);
}
/************************ FIN GESTION DES LANGUES ******************/


$routes = [
    "default" => ["PHP/VIEW/", "Accueil", "Accueil"], 

    "listeFilms" => ["PHP/VIEW/", "ListeFilms", "Liste des Films"],
    "formFilm" => ["PHP/VIEW/", "FormFilm", "Formulaire des acteurs"],
    "actionFilm" => ["PHP/VIEW/", "ActionsFilms", "Formulaire des Films"],

    "listeActeurs" => ["PHP/VIEW/", "ListeActeurs", "Liste des Acteurs"],
    "formActeur" => ["PHP/VIEW/", "FormActeur", "Formulaire des acteurs"],
    "actionActeur" => ["PHP/VIEW/", "ActionsActeurs", "Formulaire des acteurs"],

    "listeGenres" => ["PHP/VIEW/", "ListeGenres", "Liste des Genres"],
    "formGenre" => ["PHP/VIEW/", "FormGenre", "Formulaire des Genres"],
    "actionsGenres" => ["PHP/VIEW/", "ActionsGenres", "Formulaire des Genres"],

    "listeRealisateurs" => ["PHP/VIEW/", "ListeRealisateurs", "Liste des Realisateurs"],
    "formRealisateur" => ["PHP/VIEW/", "FormRealisateur", "Formulaire des Realisateurs"],
    "actionsRealisateurs" => ["PHP/VIEW/", "ActionsRealisateurs", "Formulaire des Realisateurs"],

    "listeStudios" => ["PHP/VIEW/", "ListeStudios", "Liste des Studios"],
    "formStudio" => ["PHP/VIEW/", "FormStudio", "Formulaire des Studios"],
    "actionsStudios" => ["PHP/VIEW/", "ActionsStudio", "Formulaire des studios"],

    "formInscription" => ["PHP/VIEW/", "FormInscription", "Formulaire des Inscriptions"],
    "actionsUtilisateurs" => ["PHP/VIEW/", "ActionsUtilisateurs", "Formulaire"],

    "formConnexion" => ["PHP/VIEW/", "FormConnexion", "Formulaire des Connexions"],
    "admin" => ["PHP/VIEW/", "Admin", "Admin"],
    "user" => ["PHP/VIEW/", "user", "User"],

];


if (isset($_GET["codePage"]))
{

    $code = $_GET["codePage"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$code]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$code]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }
}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);
}
