<?php
switch ($_GET['mode']) {
    case "Inscription":
        {
            $u = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
            if ($u == false) {
                $u = new Utilisateurs($_POST);
                $u->setMdpUtilisateur(md5($u->getMdpUtilisateur()));
                UtilisateursManager::add($u);
                header("location:index.php?codePage=formConnexion&mode=ajout");
            } else {
                echo "le pseudo existe deja";
                header("refresh:3;url=index.php?codePage=formConnexion&mode=ajout");
            }
            break;
        }

    case "Connexion":
        {
            $u = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
            if ($u != false) {
                if (md5($_POST['mdpUtilisateur']) == $u->getMdpUtilisateur()) {
                    echo "connexion réussie.";
                    header("location:index.php?codePage=default");
                    $_SESSION['utilisateur'] = $u;
                } else {
                    echo 'le mot de passe est incorrect';
                    header("refresh:3;url=index.php?codePage=formConnexion&mode=ajout");
                }
                break;
            } else {
                echo "le pseudo n'existe pas";
                header("refresh:3;url=index.php?codePage=formConnexion&mode=ajout");
            }
        }
    case "Deconnexion":
        {
            session_destroy();
            header("location:index.php?codePage=default");
        }
}
