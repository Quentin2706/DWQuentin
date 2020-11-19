<?php

include "head.php";
include "header.php";

$idproduit = $_GET['id'];
$pinfo = produitsManager::findById($idproduit);

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne">';
echo'<div class="boutons"><a href="../../index.php">Retour a la page d\'Acceuil</a></div>';
echo'<div>';
echo'<form method="GET" action="updatetransmission.php">';
echo'<input name="id" type="hidden" value="'.$pinfo->getIdProduit().'"/>';
echo'<label>Nom du produit :</label>';
echo'<input name="nom" type="text" value="'.$pinfo->getlibelleProduit().'"/>';
echo'</div>';
echo'<div>';
echo'<label>Prix du produit :</label>';
echo'<input name="prix" type="text" value="'.$pinfo->getPrix().'"/>';
echo'</div>';
echo'<div>';
echo'<label>Date de peremption du produit :</label>';
echo'<input  name="date" type="date" value="'.$pinfo->getDateDePeremption().'"/>';
echo'</div>';
echo'<div>';
echo'<div></div>';
echo'<input type="submit" value="submit">';
echo'<div></div>';
echo'</form>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'<div></div>';
echo'</div>';