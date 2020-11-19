<?php
$titre = "Produits";
include ('./PHP/VIEW/head.php');
include ('./PHP/VIEW/header.php');
include ('./PHP/VIEW/listeproduits.php');

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne">';
echo'<div class="boutons"><a href="./PHP/VIEW/add.php">Ajouter un produit</a></div>';
echo'<div>';
foreach($produits as $unProduit)
{
    echo'<div class="id">'.$unProduit->getIdProduit().'</div>';
    echo'<div class="centrer padding nowrap">'.$unProduit->getLibelleProduit().'</div>';
    echo'<div class="boutons"><a href="./PHP/VIEW/detail.php?id='.$unProduit->getIdProduit().'">Afficher</a></div>';
    echo'<div class="boutons"><a href="./PHP/VIEW/update.php?id='.$unProduit->getIdProduit().'">Modifier</a></div>';
    echo'<div class="boutons"><a href="./PHP/VIEW/delete.php?id='.$unProduit->getIdProduit().'">Supprimer</a></div>';
    echo'</div>';
    echo'<div>';
}
echo'</div>';
echo'</div>';
echo'</div>';
echo'<div></div>';
echo'</div>';
