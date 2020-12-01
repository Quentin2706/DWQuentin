<?php

echo '<div class = "colonne">
<h2>Liste des Studios</h2>
<div class = "liste colonne">';
echo '<a class="ajout btn" href ="index.php?codePage=formStudio&mode=ajout">Ajouter</a>';
$studios = StudiosManager::getList();
foreach ($studios as $unstudio)
{
    if($unstudio->getIdStudio()!=1){
    echo '<div class="text">'.$unstudio->getNomStudio().'</div>';
    echo '<div><div><a class="detail btn" href = "index.php?codePage=formStudio&mode=edit&id='.$unstudio->getIdStudio().'">Detail</a></div>';
    echo '<div><a class="modif btn" href = "index.php?codePage=formStudio&mode=modif&id='.$unstudio->getIdStudio().'">Modifier</a></div>';
    echo '<div><a class="suppr btn" href = "index.php?codePage=formStudio&mode=delete&id='.$unstudio->getIdStudio().'">Supprimer</a></div></div>';
    }
}
echo '</div>';