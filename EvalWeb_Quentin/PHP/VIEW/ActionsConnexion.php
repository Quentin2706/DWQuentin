<?php

$mode = $_GET['mode'];
var_dump($mode);
switch ($mode) {
    case "Connexion":
        {
            $user = UtilisateurManager::getByPseudo($_POST['pseudo']);
            var_dump($user);
            if ($user != false) {
                if (crypte($_POST['motDePasse']) == $user->getMotDePasse()) {
                    echo 'connection reussie';
                    $_SESSION['user'] = $user;
                    if ($_SESSION['user']->getRole() == 1) {
                        header("Location:index.php?page=default");
                    } else {
                        header("Location:index.php?page=ListeSuivi");
                    }
                } else {
                    echo 'le mot de passe est incorrect';
                    header("refresh:3;url=index.php?page=FormConnexion");
                }
            } else {
                echo "le pseudo n'existe pas";
                header("refresh:3;url=index.php?page=FormConnexion");
            }
            break;
        }
    case "Deconnexion":
        {
            var_dump($mode);
            // session_destroy();
            unset($_SESSION['user']);
            // header("location:index.php?page=FormConnexion");
        break;
        }
}
