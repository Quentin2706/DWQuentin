<?php

echo '<div class = "colonne margeV bcgmain">';
echo '<div>';
echo '<div></div>';
echo '<div class="bouton centrer"><a class="ajout btn" href ="index.php?page=FormEleve&mode=ajout">Ajouter un élève</a></div>';
echo '<div></div>';
echo '</div>';
echo '<div>';
echo '<div></div>';
 $eleves = EleveManager::getList();
 echo'<div class="colonne">';
 foreach ($eleves as $unEleve)
 {
     echo '<div>';
     echo '<div class="listelib centrer">'.$unEleve->getNomEleve().'</div>';
     echo '<div class="listelib centrer">'.$unEleve->getPrenomEleve().'</div>';
     echo '<div class="listelib centrer">'.$unEleve->getClasse().'</div>';
     echo '<div class="centrer">';
     echo '<div></div>';
     echo'<img src="modifier.png" alt="">';
     echo '<div class="petitemarge"><a href = "index.php?page=FormEleve&mode=modif&id='.$unEleve->getIdEleve().'">modifier</a></div>';
     echo '<div class="petitemarge"><a href = "index.php?page=FormEleve&mode=suppr&id='.$unEleve->getIdEleve().'">supprimer</a></div>';
     echo '<div></div>';
     echo'</div>';
     echo '</div>';
 }
 echo '</div>';
echo '<div></div>';
echo '</div>';