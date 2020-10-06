<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$emp[] = new Employe(["nom" => "Dupont", "prenom" => "nicolas", "dateEmbauche" => new DateTime('11-11-2019'), "posteOccupe" => "Comptable", "salaire" => 20, "service" => "Comptabilité"]);
$emp[] = new Employe(["nom" => "Bouly", "prenom" => "Jonathan", "dateEmbauche" => new DateTime('03-08-2009'), "posteOccupe" => "Avocat", "salaire" => 31, "service" => "Droit"]);
$emp[] = new Employe(["nom" => "Hydre", "prenom" => "Joséphine", "dateEmbauche" => new DateTime('30-02-2005'), "posteOccupe" => "Comptable", "salaire" => 25, "service" => "Comptabilité"]);
$emp[] = new Employe(["nom" => "Pagre", "prenom" => "Jerome", "dateEmbauche" => new DateTime('27-06-2002'), "posteOccupe" => "Avocat", "salaire" => 35, "service" => "Droit"]);
$emp[] = new Employe(["nom" => "boulet", "prenom" => "jean", "dateEmbauche" => new DateTime('16-04-1999'), "posteOccupe" => "Notaire", "salaire" => 30, "service" => "Notaire"]);

$aujd = new DateTime('now');
$annee = $aujd->format('Y');
$datePrime = new DateTime('30-11-' . $annee);

for ($i = 0; $i < Employe::getNbEmploye(); $i++) {
    if ($aujd > $datePrime) {
        echo "\nLa prime d'un montant de " . $emp[$i]->prime() . " euros a été versée.\n";
    } else {
        echo "\nLa prime d'un montant de " . $emp[$i]->prime() . " euros n'a pas encore été versée.\n";
    }
}

$listeEmploye = [$emp[0], $emp[1], $emp[2], $emp[3], $emp[4]];
asort($listeEmploye);

echo Employe::getNbEmploye() <= 1 ? "Il y a " . Employe::getNbEmploye() . " employé dans l'entreprise." : "Il y a " . Employe::getNbEmploye() . " employés dans l'entreprise.";

foreach ($listeEmploye as $elt) {
    echo "\n" . $elt->toString();
}

function sortbyService(Employe $obj1, Employe $obj2)
{
    if ($obj1->getService() == $obj2->getService()) {
        return 0;
    } else if ($obj1->getService() > $obj2->getService()) {
        return 1;
    } else {
        return -10;
    }
}
echo "\n\n*****************    Trié par Service    *************************\n";

usort($listeEmploye, "sortbyService");

foreach ($listeEmploye as $elt) {
    echo "\n" . $elt->toString();
}

$total= 0;

foreach ($listeEmploye as $elt) {
    $total+=($elt->getSalaire()*1000)+$elt->Prime();
}
echo "\n\nLe cout total de la masse salariale est de :".$total. " euros.";

