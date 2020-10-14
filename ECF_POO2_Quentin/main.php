<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");


$auteur1 = new Auteur (["nom" => "Proust", "prenom" => "Michel", "dateNaissance" => new DateTime('18-06-1984')]);
$auteur2 = new Auteur (["nom" => "Bichette", "prenom" => "Georgette", "dateNaissance" => new DateTime('18-06-1984'), "dateDeces" => new DateTime('18-06-2030')]);
$auteur3 = new Auteur (["nom" => "Hugo", "prenom" => "Victor", "dateNaissance" => new DateTime('18-06-1901'), "dateDeces" => new DateTime('18-06-1955')]);
$auteur4 = new Auteur (["nom" => "Degaulle", "prenom" => "Charles", "dateNaissance" => new DateTime('18-06-1900'), "dateDeces" => new DateTime('18-06-1970')]);
$livre1 = new Livre(["titre" => "Lamadeleine", "auteur" =>$auteur1, "NombreDePages" => "300"]);
$livre2 = new Livre(["titre" => "Lamadeleine", "auteur" =>$auteur2, "NombreDePages" => "300"]);
$video1 = new Video (["titre" => " Les misérables", "auteur" => $auteur3, "sousTitres" => "Sans"]);
$enregistrementAudio1 = new EnregistrementAudio (["titre" => " Discours de Charles Degaulle", "auteur" => $auteur4 , "duree" => "30 minutes" ]);
$document1 = new Document (["auteur"=>$auteur1, "Titre" => $livre1->getTitre(), "emprunte" => "oui", "typeDoc" => "livre", "infoDivers" => $livre1->getNombreDePages() ]);
$document2 = new Document (["auteur"=>$auteur3, "Titre" => $video1->getTitre(), "emprunte" => "oui", "typeDoc" => "video", "infoDivers" => $video1->getSousTitres()]);
$document3 = new Document (["auteur"=>$auteur4, "Titre" => $enregistrementAudio1->getTitre(), "emprunte" => "Non ","typeDoc" => "Enregistrement Audio", "infoDivers" => $enregistrementAudio1->getDuree()]);
$document4 = new Document (["auteur"=>$auteur4, "Titre" => $enregistrementAudio1->getTitre(), "emprunte" => "non ","typeDoc" => "Enregistrement Audio"]);


echo $document1 ->toString()."\n";
echo $document2 ->toString()."\n";
echo $document3 ->toString()."\n";
echo $document4 ->toString()."\n";



