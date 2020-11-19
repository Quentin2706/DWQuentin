<?php

include "head.php";
include "header.php";

$id = $_GET['id'];
$p = produitsManager::findById($id);

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne">';
echo'<div class="boutons"><a href="../../index.php">Retour a la page d\'Acceuil</a></div>';
echo'<div>';
echo' Nom du produit : ';
echo $p->getLibelleProduit();
echo'</div>';
echo'<div>';
echo'Prix du produit : ';
echo $p->getPrix().' euros';
echo'</div>';
echo'<div>';
echo'Date de peremption du produit : ';
echo $p->getDateDePeremption();
echo'</div>';
echo'<div>';
echo'<div></div>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'<div></div>';
echo'</div>';
