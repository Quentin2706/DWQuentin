<nav>
        <div></div>
        <div>
        <a href="index.php?codePage=listeFilms">
            <div class="boutons">
                Liste des Films
            </div>
        </a>
        <a href="index.php?codePage=listeActeurs">
            <div class="boutons">
                Liste des Acteurs
            </div>
        </a>
        <a href="index.php?codePage=listeGenres">
            <div class="boutons">
                Listes des Genres
            </div>
        </a>
        <a href="index.php?codePage=listeRealisateurs">
            <div class="boutons">
                Listes des Réalisateurs
            </div>
        </a>
        <a href="index.php?codePage=listeStudios">
            <div class="boutons">
                Listes des Studios
            </div>
        </a>
        <?php
        if(empty($_SESSION))
        {
        echo'<a href="index.php?codePage=formInscription&mode=ajout">
            <div class="boutons">
                Inscription
            </div>
        </a>
        <a href="index.php?codePage=formConnexion&mode=ajout">
            <div class="boutons">
                Connexion
            </div>
        </a>';
        }else {
            echo'<a href="index.php?codePage=actionsUtilisateurs&mode=Deconnexion">
            <div class="boutons">
                Deconnexion
            </div>
        </a>';
        }
        ?>
        </div>
        <div></div>
    </nav>