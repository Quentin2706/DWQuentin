<?php 

$produits = produitsManager::getList();

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne border">';
echo'<div class="boutons"><a href="index.php?codePage=form&typeform=add">Ajouter un produit</a></div>';
foreach($produits as $unProduit)
{
    echo'<div class="borderline">';
    echo'<div class="id">'.$unProduit->getIdProduit().'</div>';
    echo'<div class="centrer padding nowrap">'.$unProduit->getLibelleProduit().'</div>';
    echo'<div class="boutons"><a href="./index.php?codePage=form&typeform=detail&id='.$unProduit->getIdProduit().'">Afficher</a></div>';
    echo'<div class="boutons"><a href="./index.php?codePage=form&typeform=update&id='.$unProduit->getIdProduit().'">Modifier</a></div>';
    echo'<div class="boutons"><a href="./index.php?codePage=transmission&traitement=delete&id='.$unProduit->getIdProduit().'">Supprimer</a></div>';
    echo'</div>';
}
echo'</div>';
echo'</div>';
echo'<div></div>';
echo'</div>';
