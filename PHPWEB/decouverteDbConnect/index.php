<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");


try {
    $db = new PDO ('mysql:host=localhost;dbname=exercice3;charset=utf8', 'root', '');
} 
catch (Exception $e) 
{
    if ($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

echo "on est connecté à la base de données<br><br>";


/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/

// $query=$db->query("SELECT nomEtudiant, prenomEtudiant, adresseEtudiant, villeEtudiant, codePostalEtudiant FROM etudiants where idEtudiant=2");
// $answer = $query->fetch(PDO::FETCH_ASSOC);
// $etudiant1 = new etudiants($answer);

// echo 'nom de l\'étudiant : '.strtoupper($etudiant1->getNomEtudiant()).'<br>';
// echo 'prénom de l\'étudiant : '.ucfirst($etudiant1->getPrenomEtudiant()).'<br>';
// echo 'adresse de l\'étudiant : '.$etudiant1->getAdresseEtudiant().'<br>';
// echo 'ville de l\'étudiant : '.strtoupper($etudiant1->getVilleEtudiant()).'<br>';
// echo 'Code postal de l\'étudiant : '.$etudiant1->getCodePostalEtudiant().'<br>';


/********************************************/
/*****  REQUETE AVEC RESULTAT MULTIPLE  *****/
/********************************************/


// $query=$db->query("SELECT nomEtudiant, prenomEtudiant, adresseEtudiant, villeEtudiant, codePostalEtudiant FROM etudiants");
// while ($data = $query->fetch(PDO::FETCH_ASSOC))
// {
//     $etudiants[]= new Etudiants($data);
// }

// foreach ($etudiants as $etudiant)
// {
//     echo 'nom de l\'étudiant : '.strtoupper($etudiant->getNomEtudiant()).'<br>';
//     echo 'prénom de l\'étudiant : '.ucfirst($etudiant->getPrenomEtudiant()).'<br>';
//     echo 'adresse de l\'étudiant : '.$etudiant->getAdresseEtudiant().'<br>';
//     echo 'ville de l\'étudiant : '.strtoupper($etudiant->getVilleEtudiant()).'<br>';
//     echo 'Code postal de l\'étudiant : '.$etudiant->getCodePostalEtudiant().'<br><br>';
// }


/********************************************/
/*****      REQUETE d'AJOUT SIMPLE      *****/
/********************************************/


// $insert = $db->exec('INSERT INTO etudiants(nomEtudiant,prenomEtudiant,adresseEtudiant,villeEtudiant) VALUES ("cugny", "maxime", "38 rue pierre puis", "Calais")');
// var_dump($insert);




/********************************************/
/*****     REQUETE d'AJOUT PARAMETRE    *****/
/********************************************/


// $newetudiant = new Etudiants(["nomEtudiant"=>"Hich","prenomEtudiant"=>"Roberto","adresseEtudiant"=>"11 bis rue du chapeau","villeEtudiant"=>"Comté","codePostalEtudiant"=>"00006"]);
// var_dump($newetudiant);

// $query = $db->prepare('INSERT INTO etudiants(nomEtudiant, prenomEtudiant) VALUES(:nom, :prenom)');

// $query -> bindValue(':nom', $newetudiant->getNomEtudiant());
// $query -> bindValue(':prenom', $newetudiant->getPrenomEtudiant());

// $answer = $query ->execute();
// var_dump($answer);

/********************************************/
/*****     REQUETE d'AJOUT COMPOSEE     *****/
/********************************************/

// $newetudiant = new Etudiants(["nomEtudiant"=>"Hich","prenomEtudiant"=>"Roberto","adresseEtudiant"=>"11 bis rue du chapeau","villeEtudiant"=>"Comté","codePostalEtudiant"=>"00006"]);
// $query = $db->prepare('INSERT INTO etudiants(nomEtudiant, prenomEtudiant) VALUES("'.$newetudiant->getNomEtudiant().'","'.$newetudiant->getPrenomEtudiant().'")');
// $answer = $query->execute();
// var_dump($newetudiant);
// var_dump($query);
// var_dump($answer);



// $remove = $db->exec('DELETE FROM etudiants WHERE prenomEtudiant="'.$newetudiant->getPrenomEtudiant().'"'.' AND nomEtudiant="'.$newetudiant->getNomEtudiant().'"' );
// var_dump($remove);