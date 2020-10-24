<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$compte1 = new Compte (["numero" => "50236R", "montant" => "120"]);
$livret1 = new Livret (["numero" => "50236R", "montant" => "1200"]);
$c1 = new Client (["nom" => "Pierrot", "prenom" => "Jean", "compte" => $compte1, "livret" => $livret1]);

echo $c1 -> Affiche()."\n";
$c1 -> recoitArgent(50);
echo $c1 -> Affiche()."\n";
$c1 -> depenseArgent(10);
echo $c1 -> Affiche()."\n";
$c1 -> epargneArgent(100);
echo $c1 -> Affiche()."\n";
$c1->getLivret()->appliqueInteret();
echo $c1 -> Affiche()."\n";