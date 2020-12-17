<?php
switch ($_GET['mode']) {
    case "ajoutUtilisateur": {
            if ($_POST['motDePasse'] == $_POST['confirmation']) {
                
                // recherche si le pseudo existe
                $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
                if ($uti == false) {
                    $u = new Utilisateurs($_POST);
                    //encodage du mot de passe
                    $u->setMotDePasse(crypter($u->getMotDePasse()));
                    UtilisateursManager::add($u);
                    echo "Création du compte réussie";
                    header("refresh:3;url=index.php?codePage=default");
                } else {
                    echo "le pseudo existe deja";
                    header("refresh:3;url=index.php?codePage=formAjoutUtilisateur");
                }
            } else {
                echo "la confirmation ne correspond pas au mot de passe";
                header("refresh:3;url=index.php?codePage=formAjoutUtilisateur");
            }
            break;

        }
    case "selectUtilisateur": {

            $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
            if ($uti != false) {
                if (crypter($_POST['motDePasse']) == $uti->getMotDePasse()) {
                    echo 'connection reussie';
                    $_SESSION['utilisateur'] = $uti;
                    header("refresh:3;url=index.php?codePage=default");
                } else {
                    echo 'le mot de passe est incorrect';
                    header("refresh:3;url=index.php?codePage=formConnexionUtilisateur");
                }
            } else {
                echo "le pseudo n'existe pas";
                header("refresh:3;url=index.php?codePage=formConnexionUtilisateur");
            }
            break;

        }
    case "deconnexionUtilisateur": {

            session_destroy();
            echo "Vous êtes déconnecté";
            header("refresh:3;url=index.php?codePage=default");

        }
}
