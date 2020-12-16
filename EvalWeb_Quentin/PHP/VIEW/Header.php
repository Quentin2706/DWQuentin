 <?php // $page = $_GET['page']; ?> 
<header>
<div class="img">

</div>
<div class="colonne midHeader">
    <div class="gros centrer midHeader">GESTION DES NOTES</div>
    <div class="sousTitre centrer midHeader">
        <?php
        switch($page)
        {
            case "ListeSuivi" :
                {
                    echo 'Gerer les notes';
                }
        }
        // je n'ai pas su modifier le sous titre 
?>
    </div>
</div>
<div>
    <div></div>
    <div class="colonne">
    <?php
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']->getRole() == 1) {
        echo '<div class="listelib centrer">Proviseur</div>';
    } else {
        echo '<div class="listelib centrer">'.$_SESSION['user']->getNomUtilisateur().' '.$_SESSION['user']->getPrenomUtilisateur().'</div>';
        echo '<div class="listelib centrer">Enseignant</div>';
    }
}
if (isset($_SESSION['user'])) {
    echo '<div class="bouton centrer"><a href="index.php?page=FormConnexion&mode=Deconnexion">Se deconnecter</a></div>';
} else {
    echo '<div class="bouton centrer"><a href="index.php?page=FormConnexion&mode=Connexion">Connectez-vous</a></div>';
}
?>
    </div>
    <div></div>
</div>
</header>