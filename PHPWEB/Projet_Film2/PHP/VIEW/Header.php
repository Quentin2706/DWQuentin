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
        <div class="titre colonne centrer"><div class="centrer">Mediatech !</div>
        <div class="soustitre centrer"><?php echo texte("sousTitreHeader");?></div>
        <?php 
        if(isset($_SESSION['utilisateur']))
        {
            echo' <div class="soustitre centrer pseudo">'; echo texte("salut"); echo', '.$_SESSION['utilisateur']->getPseudoUtilisateur().'</div>';
        }
        ?>
        </div>
    <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a>
    </header>
