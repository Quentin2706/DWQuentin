<?php

echo '<div class = "colonne">
<h2>Liste des realisateurs</h2>
<div class = "liste colonne">';
echo '<a class="ajout btn" href ="index.php?codePage=formRealisateur&mode=ajout">Ajouter</a>';
$realisateurs = RealisateursManager::getList();
foreach ($realisateurs as $realisateur)
{
    echo '<div class="text">'.$realisateur->getNomRealisateur()." ".$realisateur->getPrenomRealisateur().'</div>';
    echo '<div><div><a class="detail btn" href = "index.php?codePage=formRealisateur&mode=edit&id='.$realisateur->getIdRealisateur().'">Detail</a></div>';
    echo '<div><a class="modif btn" href = "index.php?codePage=formRealisateur&mode=modif&id='.$realisateur->getIdRealisateur().'">Modifier</a></div>';
    echo '<div><a class="suppr btn" href = "index.php?codePage=formRealisateur&mode=delete&id='.$realisateur->getIdRealisateur().'">Supprimer</a></div></div>';

}
echo '</div>';