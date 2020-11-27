<?php
var_dump($_POST);
$p = new Utilisateurs($_POST);
switch ($_GET['mode']) {
    case "Inscription":
        {
            UtilisateursManager::add($p);
            break;
        }
    case "Connexion":
        {
            $p = UtilisateursManager::findByPseudo($p->getPseudoUtilisateur());
            var_dump($p);
            break;
        }
}

//header("location:index.php?codePage=default");
