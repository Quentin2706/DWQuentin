<?php
echo '
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php echo $titre ?></title>';

if (file_exists("./CSS/style.css")) {

    echo '<link rel="stylesheet" href="./CSS/style.css">';

} else {
    echo '<link rel="stylesheet" href="../../CSS/style.css">';

}
;

echo '

    <script src="./JS/script.js"></script>
</head>';

function chargerClasse($classe)
{
    if (file_exists("Php/Controller/" . $classe . ".Class.php")) {
        require "Php/Controller/" . $classe . ".Class.php";
    } else if (file_exists("../Controller/" . $classe . ".Class.php")) {

        require "../Controller/" . $classe . ".Class.php";

    }

    if (file_exists("Php/Model/" . $classe . ".Class.php")) {
        require "Php/Model/" . $classe . ".Class.php";

    } else if (file_exists("../Model/" . $classe . ".Class.php")) {

        require "../Model/" . $classe . ".Class.php";

    }

}
spl_autoload_register("chargerClasse");

Dbconnect::init();

echo '<body>';
