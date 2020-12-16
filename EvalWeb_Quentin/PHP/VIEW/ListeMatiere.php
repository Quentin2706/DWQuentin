<?php

echo '<div class = "colonne margeV bcgmain">';
echo '<div>';
echo '<div></div>';
echo '<div class="bouton centrer"><a class="ajout btn" href ="index.php?page=FormMatiere&mode=ajout">Ajouter une matiere</a></div>';
echo '<div></div>';
echo '</div>';
echo '<div>';
echo '<div></div>';
 $matieres = MatiereManager::getList();
 echo'<div class="colonne">';
 for ($i = 1; $i < count($matieres); $i++)
 {
     echo '<div>';
     echo '<div class="listelib centrer">'.$matieres[$i]->getLibelleMatiere().'</div>';
     echo '<div class="centrer">';
     echo '<div></div>';
     echo'<img src="modifier.png" alt="">';
     echo '<div class="petitemarge"><a href = "index.php?page=FormMatiere&mode=modif&id='.$matieres[$i]->getIdMatiere().'">modifier</a></div>';
     echo '<div class="petitemarge"><a href = "index.php?page=FormMatiere&mode=suppr&id='.$matieres[$i]->getIdMatiere().'">supprimer</a></div>';
     echo '<div></div>';
     echo'</div>';
     echo '</div>';
 }
 echo '</div>';
echo '<div></div>';
echo '</div>';