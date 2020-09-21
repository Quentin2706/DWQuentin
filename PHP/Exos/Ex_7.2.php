<?php
require "../../function.php";

$tab=creationTableauinconnu();
affichageTableauforeach($tab);
echo "\nretrouvez le tableau décroissant ci dessous\n";
rsort($tab);
affichageTableauforeach($tab);