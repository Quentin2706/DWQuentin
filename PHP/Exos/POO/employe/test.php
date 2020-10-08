<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");
$agence1= new Agence(["nom"=>"OSKOUR","adresse"=>"10 rue du SOS", "codePostal"=>60666, "ville"=>"Une ile perdue", "modeRestauration"=> "Inclus"]);
$agence2= new Agence(["nom"=>"ALED","adresse"=>"13 avenue de l'appel à l'aide", "codePostal"=>"00001", "ville"=>"La grotte", "modeRestauration"=> "Tickets restaurants"]);
$enfant1 = new Enfants(["prenom"=>"Nicolas", "dateNaissance"=> new DateTime('04-05-2004')]);
$enfant2 = new Enfants(["prenom"=>"Fanny", "dateNaissance"=> new DateTime('04-05-2010')]);
$emp[] = new Employe(["nom" => "Dupont", "prenom" => "nicolas", "dateEmbauche" => new DateTime('11-11-2019'), "posteOccupe" => "Comptable", "salaire" => 20, "service" => "Comptabilité", "agence"=>$agence1, "enfants"=> [$enfant1,$enfant2]]);
$emp[] = new Employe(["nom" => "Bouly", "prenom" => "Jonathan", "dateEmbauche" => new DateTime('03-08-2009'), "posteOccupe" => "Avocat", "salaire" => 31, "service" => "Droit", "agence"=>$agence1, "enfants"=> [$enfant1]]);
$emp[] = new Employe(["nom" => "Hydre", "prenom" => "Joséphine", "dateEmbauche" => new DateTime('30-02-2005'), "posteOccupe" => "Comptable", "salaire" => 25, "service" => "Comptabilité", "agence"=>$agence2]);
$emp[] = new Employe(["nom" => "Pagre", "prenom" => "Jerome", "dateEmbauche" => new DateTime('27-06-2002'), "posteOccupe" => "Avocat", "salaire" => 35, "service" => "Droit", "agence"=>$agence1]);
$emp[] = new Employe(["nom" => "boulet", "prenom" => "jean", "dateEmbauche" => new DateTime('16-04-1999'), "posteOccupe" => "Notaire", "salaire" => 30, "service" => "Notaire", "agence"=>$agence2]);

$aujd = new DateTime('now');
$annee = $aujd->format('Y');
$datePrime = new DateTime('30-11-' . $annee);

// for ($i = 0; $i < Employe::getNbEmploye(); $i++) {
//     if ($aujd > $datePrime) {
//         echo "\nLa prime d'un montant de " . $emp[$i]->prime() . " euros a été versée.\n";
//     } else {
//         echo "\nLa prime d'un montant de " . $emp[$i]->prime() . " euros n'a pas encore été versée.\n";
//     }
// }
echo Employe::getNbEmploye() <= 1 ? "Il y a " . Employe::getNbEmploye() . " employé dans l'entreprise." : "Il y a " . Employe::getNbEmploye() . " employés dans l'entreprise.";

// foreach ($emp as $elt) {
//     echo "\n" . $elt->toString();
// }
// echo "\n\n*****************    Trié par Service    *************************\n";
usort($emp, array("Employe","compareToServiceNomPrenom"));

foreach ($emp as $elt) {
    echo "\n" . $elt->toString();
}

$total= 0;
foreach ($emp as $elt) {
    $total+=$elt->masseSalariale();
}
echo "\n\nLe cout total de la masse salariale est de :".$total. " euros.";