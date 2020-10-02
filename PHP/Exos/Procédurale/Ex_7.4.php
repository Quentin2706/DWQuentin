<?php 

require"../../function.php";

$tab = [12,8,4,45,64,9,2];
affichageTableauforeach($tab);
$indice=readline("Quel indice de valeur du tableau voulez vous enlever ?");
array_splice($tab,$indice-1,1);
affichageTableauforeach($tab);