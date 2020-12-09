<?php

if(!empty($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUtilisateur()=="Admin")
    {
        echo '<h2>je suis un admin sur une page dont le User voit</h2>'; 
    }
    else {
        echo '<h2>je suis un user</h2>';
    }
}