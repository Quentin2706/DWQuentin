<?php
var_dump($_POST);
$p = new Matiere($_POST);


switch ($_GET['mode']) {
    case "ajout":
        {
            MatiereManager::add($p);
            break;
        }
    case "modif":
        {   
            MatiereManager::update($p);
            break;
        }
    case "suppr":
        {
            $test = SuiviManager::GetByMatiere($p->getIdMatiere());
            $enseignant = UtilisateurManager::GetByMatiere($p->getIdMatiere());
            var_dump($test);
            foreach($test as $unTest)
            {
                SuiviManager::delete($unTest);
            }
            foreach ($enseignant as $unEnseignant)
            {
                UtilisateurManager::delete($unEnseignant);
            }
            
            MatiereManager::delete($p);
            break;
        }
}

// header("location:index.php?page=ListeMatiere");