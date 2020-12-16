<?php

switch ($_GET['mode']) {
    case "ajout":
        {
            $matiere = $_POST['idMatiere'];
            $matiere = MatiereManager::findByMatiere($matiere);
            $matiere = $matiere->getIdMatiere();
            $pwd = $_POST['motDePasse'];
            $_POST['motDePasse'] = crypte($pwd);
            $_POST['idMatiere'] = $matiere;
            $p = new Utilisateur($_POST);
            var_dump($p);
            UtilisateurManager::add($p);
            break;
        }
    case "modif":
        {
            $matiere = $_POST['idMatiere'];
            $matiere = MatiereManager::findByMatiere($matiere);
            $matiere = $matiere->getIdMatiere();
            $_POST['idMatiere'] = $matiere;
            $p = new Utilisateur($_POST);
            var_dump($p);
            UtilisateurManager::update($p);
            break;
        }
    case "suppr":
        {
            $p = new Utilisateur($_POST);
            UtilisateurManager::delete($p);
            break;
        }
}

header("location:index.php?page=ListeEnseignant");
