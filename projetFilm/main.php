<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");


$r = new Realisateurs (["idRealisateur" => 1, "nomRealisateur" => "toto", "prenomRealisateur" => "titi", "dateDeNaissanceRealisateur" => new DateTime('04-05-2004'), "paysOrigineRealiseur" => "test"]);

echo $r-> toString();
echo "\n".$r-> age();