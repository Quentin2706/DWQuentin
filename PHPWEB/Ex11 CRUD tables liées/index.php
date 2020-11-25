<?PHP
/* Autoload permet de charger toutes les classes necessaires */
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

/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
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

//on active la connexion à la base de données
DbConnect::init();

/* création d'u tableau de redirection, en fonction du codePage, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VIEW/", "ListeCategorie", "Liste de Catégories"],

    "listeProduit" => ["PHP/VIEW/", "ListeProduit", "Liste de produits"],
    "formProduit" => ["PHP/VIEW/", "FormProduit", "Détail du produit"],
    "actionProduit" => ["PHP/VIEW/", "ActionProduit", "Mise à jour du produit"],
    "listeCategorie" => ["PHP/VIEW/", "ListeCategorie", "Liste des Catégories"],
    "formCategorie" => ["PHP/VIEW/", "FormCategorie", "Gestion des catégories"],
    "actionCategorie" => ["PHP/VIEW/", "ActionCategorie", "Mise à jour du produit"],
    "test" => ["PHP/VIEW/", "testSelect", "Mise à jour du produit"],
    "actionSelect" => ["PHP/VIEW/", "ActionSelect", "Mise à jour du produit"]
];

if (isset($_GET["codePage"]))
{

    $codePage = $_GET["codePage"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
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
