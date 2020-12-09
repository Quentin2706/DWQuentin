<?php

echo '<div class = "colonne">
<h2>Liste des Films</h2>
<div class = "liste colonne">';
echo '<a class="ajout btn" href ="index.php?codePage=formFilm&mode=ajout">'; echo texte("btnAjouter"); echo'</a>';
$films = FilmsManager::getList();
foreach ($films as $unFilm)
{
    echo '<div class="text">'.$unFilm->getNomFilm().'</div>';
    echo '<div><div><a class="detail btn" href = "index.php?codePage=formFilm&mode=edit&id='.$unFilm->getIdFilm().'">'; echo texte("btnDetail"); echo'</a></div>';
    echo '<div><a class="modif btn" href = "index.php?codePage=formFilm&mode=modif&id='.$unFilm->getIdFilm().'">'; echo texte("btnModif"); echo'</a></div>';
    echo '<div><a class="suppr btn" href = "index.php?codePage=formFilm&mode=delete&id='.$unFilm->getIdFilm().'">'; echo texte("btnSuppr"); echo'</a></div></div>';

}
echo '</div>';

