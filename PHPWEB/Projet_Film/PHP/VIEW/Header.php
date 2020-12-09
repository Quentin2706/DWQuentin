
<header>
    <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a>
        <div class="titre colonne centrer"><div class="centrer">Mediatech !</div>
        <div class="soustitre centrer">Le site par excellence pour retrouver les meilleurs films du moment !</div>
        <?php 
        if(!empty($_SESSION))
        {
            echo' <div class="soustitre centrer pseudo"> Bonjour, '.$_SESSION['utilisateur']->getPseudoUtilisateur().'</div>';
        }
        ?>
        </div>
    <a href="index.php?codePage=default">
        <div><img class="logo" src="./IMG/logo.png" alt="logo"></div>
    </a>
    </header>
