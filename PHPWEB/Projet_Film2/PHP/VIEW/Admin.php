<?php

if(!empty($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRoleUtilisateur() == "Admin")
{
    echo '<h2>je suis un admin</h2>';
} else {
    header("location:index.php?codePage=default");
}