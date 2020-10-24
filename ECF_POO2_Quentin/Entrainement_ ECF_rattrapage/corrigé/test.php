<?php
//autoload pour retrouver les classes automatiquement
function chargerClasse($classe)
{
    require $classe . ".class.php";
}
spl_autoload_register("chargerClasse");

//on crée un compte 
$cpt = new Compte (["numero"=>"50236R", "montant"=>120]);
//on crée le livret
$liv=new Livret (["numero"=>"45789L", "montant"=>1200]);
$c1=new Client(["nom"=>"Dupont","prenom"=>"Paul","compte"=>$cpt, "livret"=>$liv]);
echo "création du client\n";
$c1->affiche();
echo "le client recoit 50€\n";
$c1->recevoir(50);
$c1->affiche();
echo "le client depense 10€\n";
$c1->depenser(10);
$c1->affiche();
echo "le client épargne 100€\n";
$c1->epargner(100);
$c1->affiche();
echo "On applique les intérêts au livret\n";
$c1->getLivret()->appliqueInteret();
$c1->affiche();

