<?php

if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRole()=="Admin"){
        echo "Vous êtes administrateur";
}
else{
    header("location:index.php?codePage=default");
}