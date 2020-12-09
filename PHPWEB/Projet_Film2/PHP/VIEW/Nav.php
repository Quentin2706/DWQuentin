<?php

/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

?>

<nav>
<div></div>
<div></div>
        <div></div>
        <div>
        <a href="index.php?codePage=listeFilms">
            <div class="boutons">
                <?php echo texte("btnLstFilm");?>
            </div>
        </a>
        <a href="index.php?codePage=listeActeurs">
            <div class="boutons">
            <?php echo texte("btnLstAct");?>
            </div>
        </a>
        <a href="index.php?codePage=listeGenres">
            <div class="boutons">
            <?php echo texte("btnLstGnr");?>
            </div>
        </a>
        <a href="index.php?codePage=listeRealisateurs">
            <div class="boutons">
            <?php echo texte("btnLstRealst");?>
            </div>
        </a>
        <a href="index.php?codePage=listeStudios">
            <div class="boutons">
            <?php echo texte("btnLstStd");?>
            </div>
        </a>
        <?php
        if(!isset($_SESSION['utilisateur']))
        {
        echo'<a href="index.php?codePage=formInscription&mode=ajout">
            <div class="boutons">';
            echo texte("btnInsc");
            echo'</div>
        </a>
        <a href="index.php?codePage=formConnexion&mode=ajout">
            <div class="boutons">';
            echo texte("btnConnect");
            echo'</div>
        </a>';
        }else {
            if($_SESSION['utilisateur']->getRoleUtilisateur() == "Admin")
            {
                echo'<a href="index.php?codePage=admin">
            <div class="boutons">
                Bouton Admin
            </div>
        </a>';
            }
            echo'<a href="index.php?codePage=user">
            <div class="boutons">
                Bouton User
            </div>
        </a>';
            echo'<a href="index.php?codePage=actionsUtilisateurs&mode=Deconnexion">
            <div class="boutons">';
            echo texte("btnDeco");
            echo '</div>
        </a>';
        }
        ?>
        </div>
        <div></div>
        <a href="<?php echo $uri; ?>lang=FR ">
            <div class="boutons">
                Francais
            </div>
        </a>
        <a href="<?php echo $uri; ?>lang=ENG">
            <div class="boutons">
                English
            </div>
        </a>
    </nav>