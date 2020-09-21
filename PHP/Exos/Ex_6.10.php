<?php

require "../../function.php";
// on demande la taille du tableau a l'utilisateur et apres on lui fait saisir les valeurs.
$taille = nbValeursTableautaille();
echo "========= Saisissez les valeurs du tableau n°1 =========\n";
$tab1 = creationTableau($taille);
echo "========= Saisissez les valeurs du tableau n°2 =========\n";
$tab2 = creationTableau($taille);

// on affecte la somme de chaque valeurs contenues dans chaque indice au nouveau tableau qu'on affiche, apres avoir fait les calculs avec la boucle for.
for ($i = 1; $i <= count($tab1); $i++) {
    $tabfinal[$i] = $tab1[$i] + $tab2[$i];
}
affichageTableauforeach($tabfinal);
