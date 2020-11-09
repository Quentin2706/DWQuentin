<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}

spl_autoload_register("ChargerClasse");


$e[] = new Employe(["Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("01-12-2020"), "fonction" => "Eleveur de punaise", "salaireAnnuel" => "14", "Service" => "Nettoyage","agence"=>$a1,"enfants"=>[$enfant[1]]]);
$e[] = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "fonction" => "Gynecologue", "salaireAnnuel" => "40", "Service" => "Medecine","agence"=>$a2,"enfants"=>[$enfant[0]]]);
$e[] = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "fonction" => "Kebabiste", "salaireAnnuel" => "30", "Service" => "Restauration","agence"=>$a2,"enfants"=>[$enfant[2],$enfant[3]]]);
$e[] = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "fonction" => "Plaquiste", "salaireAnnuel" => "20", "Service" => "batiment","agence"=>$a1]);
$e[] = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "fonction" => "Homme de menage", "salaireAnnuel" => "50", "Service" => "Nettoyage","agence"=>$a3,"enfants"=>[$enfant[4]]]);

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Employe</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div id="contenu">
            <?php echo $e[0] ->afficheEmployeHTML() ?>
    </div>
</body>

</html>