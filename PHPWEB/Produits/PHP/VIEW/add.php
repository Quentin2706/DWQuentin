<?php

include "head.php";
include "header.php";

echo'<div id="main">';
echo'<div></div>';
echo'<div class="grosflex">';
echo'<div class="colonne">';
echo'<div class="boutons"><a href="../../index.php">Retour a la page d\'Acceuil</a></div>';
echo'<div>';
echo'<form method="GET" action="addtransmission.php">';
echo'<label>Nom du produit :</label>';
echo'<input name="nom" type="text" placeholder="Nom du produit">';
echo'</div>';
echo'<div>';
echo'<label>Prix du produit :</label>';
echo'<input name="prix" type="text" placeholder="Prix du produit">';
echo'</div>';
echo'<div>';
echo'<label>Date de peremption du produit :</label>';
echo'<input  name="date" type="date" placeholder="Date de peremption">';
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