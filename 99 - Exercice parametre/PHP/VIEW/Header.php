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

<header>
    <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a>
        <div class="titre colonne centrer"><div class="centrer">Mediatech !</div><div class="soustitre centrer"><?php echo texte("titre") ?></div></div>
    
    <div class="colonne">
        <a href="<?php echo $uri; ?>lang=FR"><img src="./IMG/français.png" alt="langue"></a>
        <a href="<?php echo $uri; ?>lang=EN"><img src="./IMG/anglais.jpg" alt="langue"></a>
    </div>
    <?php
    if(empty($_SESSION['utilisateur'])){
        echo '<div class="colonne">
        <a href="index.php?codePage=formAjoutUtilisateur">
            <div class="boutons">'.
            texte("inscription")
            .'</div>
        </a>
        <a href="index.php?codePage=formConnexionUtilisateur">
            <div class="boutons">'.
            texte("connexion")
            .'</div>
        </a>
        </div>';
    }
    else{
        echo '<a href="index.php?codePage=actionsUtilisateurs&mode=deconnexionUtilisateur">
                <div class="boutons">'.
                texte("deconnexion")
                .'</div>
            </a>';
        
    }
    ?>
    </header>
    <nav>
        <div></div>
        <div>
        <a href="index.php?codePage=listeFilms">
            <div class="boutons">
                <?php echo texte("films") ?>
            </div>
        </a>
        <a href="index.php?codePage=listeActeurs">
            <div class="boutons">
            <?php echo texte("acteurs") ?>
            </div>
        </a>
        <a href="index.php?codePage=listeGenres">
            <div class="boutons">
            <?php echo texte("genres") ?>
            </div>
        </a>
        <a href="index.php?codePage=listeRealisateurs">
            <div class="boutons">
            <?php echo texte("realisateurs") ?>
            </div>
        </a>
        <a href="index.php?codePage=listeStudios">
            <div class="boutons">
            <?php echo texte("studios") ?>
            </div>
        </a>
        <?php
        if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRole()=="Admin"){
            echo '<a href="index.php?codePage=admin">
                        <div class="boutons">
                            Page admin
                        </div>
                    </a>';
        }
       
        ?>
        </div>
        <div></div>
    </nav>
