<?php

echo '<div class = "colonne">
<h2>Liste des Acteurs</h2>
<div class = "liste colonne">';
echo '<a class="ajout btn" href ="index.php?codePage=formActeur&mode=ajout">Ajouter</a>';
$films = ActeursManager::getList();
foreach ($films as $unFilm)
{
    echo '<div class="text">'.$unFilm->getNomActeur()." ".$unFilm->getPrenomActeur().'</div>';
    echo '<div><div><a class="detail btn" href = "index.php?codePage=formActeur&mode=edit&id='.$unFilm->getIdActeur().'">Detail</a></div>';
    echo '<div><a class="modif btn" href = "index.php?codePage=formActeur&mode=modif&id='.$unFilm->getIdActeur().'">Modifier</a></div>';
    echo '<div><a class="suppr btn" href = "index.php?codePage=formActeur&mode=delete&id='.$unFilm->getIdActeur().'">Supprimer</a></div></div>';

}
echo '</div>';