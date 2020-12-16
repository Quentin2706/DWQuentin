<?php
var_dump($_POST);
$p = new Suivi($_POST);


switch ($_GET['mode']) {
    case "ajout":
        {
            SuiviManager::add($p);
            break;
        }
    case "modif":
        {   
            SuiviManager::update($p);
            break;
        }
    case "suppr":
        {
            SuiviManager::delete($p);
            break;
        }
}

header("location:index.php?page=ListeSuivi");