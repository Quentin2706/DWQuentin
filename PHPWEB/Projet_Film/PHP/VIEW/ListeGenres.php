<?php

echo '<div class = "colonne">
<h2>Liste des Genres</h2>
<div class = "liste colonne">';
echo '<a class="ajout btn" href ="index.php?codePage=formGenre&mode=ajout">Ajouter</a>';
$genres = GenresManager::getList();
foreach ($genres as $genre)
{
    if($genre->getidGenre()!=1){
        echo '<div class="text">'.$genre->getLibelleGenre().'</div>';
        echo '<div><div><a class="detail btn" href = "index.php?codePage=formGenre&mode=edit&id='.$genre->getIdGenre().'">Detail</a></div>';
        echo '<div><a class="modif btn" href = "index.php?codePage=formGenre&mode=modif&id='.$genre->getIdGenre().'">Modifier</a></div>';
        echo '<div><a class="suppr btn" href = "index.php?codePage=formGenre&mode=delete&id='.$genre->getIdGenre().'">Supprimer</a></div></div>';
    }
    
}
echo '</div>';