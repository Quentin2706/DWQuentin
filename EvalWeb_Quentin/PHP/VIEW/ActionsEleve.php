<?php
var_dump($_POST);
$p = new Eleve($_POST);


switch ($_GET['mode']) {
    case "ajout":
        {
            EleveManager::add($p);
            break;
        }
    case "modif":
        {   
            EleveManager::update($p);
            break;
        }
    case "suppr":
        {
            $test = SuiviManager::GetByEleve($p->getIdEleve());
            var_dump($test);
            foreach($test as $unTest)
            {
                SuiviManager::delete($unTest);
            }
            EleveManager::delete($p);
            break;
        }
}

header("location:index.php?page=ListeEleve");