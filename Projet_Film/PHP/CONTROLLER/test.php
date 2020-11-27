<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//***************   Test Studio   *****************/

// $t = new Studios(["idStudio" => 2, "nomStudio" => "Marvel", "paysStudio" => "USA", "fondateurStudio" => "Rjeb Zied", "creationStudio" => new DateTime("2012-09-01")]);
// var_dump($t);

// echo $t->toString();

//***************   Test Acteur   *****************/+

// $t = new Acteurs(["idActeur" => 5, "nomActeur" => "RJEB", "prenomActeur" => "Zied", "origineActeur" => "Tunisie", "dateDenaissanceActeur" => new DateTime("1991-05-29")]);
// echo $t->toString();
// echo "\n";
// echo $t->age();


//***************   Test Genre   *****************/+

// $t = new Genres(["idGenre" => 1, "libelleGenre" => "Action", "desGenre" => "Exploser les voitures et tuer tout le monde "]);
// echo $t->toString();



