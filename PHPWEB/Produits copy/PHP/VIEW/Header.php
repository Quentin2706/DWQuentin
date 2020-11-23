<body class = "colonne">
    <header>
        <div>
        <?php
        if (file_exists("IMG/Logo_Afpa.jpg"))
    {
        echo '<img src="IMG/Logo_Afpa.jpg" alt="logo afpa">';

    }else{

        echo '<img src="../../IMG/Logo_Afpa.jpg" alt="logo afpa">';

    }
    ?>
        </div>
        <div class="titre">Gestion des produits</div>
        <div></div>
    </header>

