<?php
$titre = "Produits";
include ('./PHP/VIEW/head.php');
include ('./PHP/VIEW/header.php');
include ('./PHP/VIEW/listeproduits.php');

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne">';
echo'<div class="boutons">Ajouter un produit</div>';
echo'<div>';
foreach($produits as $unproduit)
{
    echo'<div class="id">'.$unproduit->getIdProduit().'</div>';
    echo'<div class="centrer padding nowrap">'.$unproduit->getLibelleProduit().'</div>';
    echo'<div class="boutons">Afficher</div>';
    echo'<div class="boutons">Modifier</div>';
    echo'<div class="boutons">Supprimer</div>';
    echo'</div>';
    echo'<div>';
}
echo'</div>';
echo'</div>';
echo'</div>';
echo'<div></div>';
echo'</div>';
