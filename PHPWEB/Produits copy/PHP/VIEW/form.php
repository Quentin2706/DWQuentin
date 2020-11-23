<?php

$page = $_GET['typeform'];

if ($page == "add") {
    echo '<div id="main">';
    echo '<div></div>';
    echo '<div class="grosflex">';
    echo '<div class="colonne">';
    echo '<div class="boutons"><a href="./index.php">Retour a la page d\'Accueil</a></div>';
    echo '<div>';
    echo '<form method="POST" action="./index.php?codePage=transmission&traitement=add">';
    echo '<label>Nom du produit :</label>';
    echo '<input name="nom" type="text" placeholder="Nom du produit">';
    echo '</div>';
    echo '<div>';
    echo '<label>Prix du produit :</label>';
    echo '<input name="prix" type="text" placeholder="Prix du produit">';
    echo '</div>';
    echo '<div>';
    echo '<label>Date de peremption du produit :</label>';
    echo '<input  name="date" type="date" placeholder="Date de peremption">';
    echo '</div>';
    echo '<div>';
    echo '<div></div>';
    echo '<input type="submit" value="submit">';
    echo '<div></div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div></div>';
    echo '</div>';
} else if ($page == "update") {
    $idproduit = $_GET['id'];
    $pinfo = produitsManager::findById($idproduit);
    echo '<div id="main">';
    echo '<div></div>';
    echo '<div class="grosflex">';
    echo '<div class="colonne">';
    echo '<div class="boutons"><a href="./index.php?codePage=liste">Retour a la page d\'Acceuil</a></div>';
    echo '<div>';
    echo '<form method="POST" action="./index.php?codePage=transmission&traitement=update">';
    echo '<input name="id" type="hidden" value="' . $pinfo->getIdProduit() . '"/>';
    echo '<label>Nom du produit :</label>';
    echo '<input name="nom" type="text" value="' . $pinfo->getlibelleProduit() . '"/>';
    echo '</div>';
    echo '<div>';
    echo '<label>Prix du produit :</label>';
    echo '<input name="prix" type="text" value="' . $pinfo->getPrix() . '"/>';
    echo '</div>';
    echo '<div>';
    echo '<label>Date de peremption du produit :</label>';
    echo '<input  name="date" type="date" value="' . $pinfo->getDateDePeremption() . '"/>';
    echo '</div>';
    echo '<div>';
    echo '<div></div>';
    echo '<input type="submit" value="submit">';
    echo '<div></div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div></div>';
    echo '</div>';
} else if ($page == "detail") {
    $id = $_GET['id'];
    $p = produitsManager::findById($id);

    echo '<div id="main">';
    echo '<div></div>';
    echo '<div class="grosflex">';
    echo '<div class="colonne">';
    echo '<div class="boutons"><a href="./index.php?codePage=liste">Retour a la page d\'Acceuil</a></div>';
    echo '<div>';
    echo ' Nom du produit : ';
    echo $p->getLibelleProduit();
    echo '</div>';
    echo '<div>';
    echo 'Prix du produit : ';
    echo $p->getPrix() . ' euros';
    echo '</div>';
    echo '<div>';
    echo 'Date de peremption du produit : ';
    echo $p->getDateDePeremption();
    echo '</div>';
    echo '<div>';
    echo '<div></div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div></div>';
    echo '</div>';

}
