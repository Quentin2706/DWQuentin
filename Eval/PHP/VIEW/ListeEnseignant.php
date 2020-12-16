<?php

echo '<div class = "colonne margeV bcgmain">';
echo '<div>';
echo '<div></div>';
echo '<div class="bouton centrer"><a class="ajout btn" href ="index.php?page=FormEnseignant&mode=ajout">Ajouter un Enseignant</a></div>';
echo '<div></div>';
echo '</div>';
echo '<div>';
echo '<div></div>';
 $enseignants = UtilisateurManager::getByRole(2);
 echo'<div class="colonne">';
 for ($i = 0; $i < count($enseignants); $i++)
 {
     echo '<div>';
     echo '<div class="listelib centrer">'.$enseignants[$i]->getMatiere()->getLibelleMatiere().'</div>';
     echo '<div class="listelib centrer">'.$enseignants[$i]->getlogin().'</div>';
     echo '<div class="listelib centrer">'.$enseignants[$i]->getNomUtilisateur().'</div>';
     echo '<div class="listelib centrer">'.$enseignants[$i]->getPrenomUtilisateur().'</div>';
     echo '<div class="centrer">';
     echo '<div></div>';
     echo'<img src="modifier.png" alt="">';
     echo '<div class="petitemarge"><a href = "index.php?page=formEnseignant&mode=modif&id='.$enseignants[$i]->getIdUtilisateur().'">modifier</a></div>';
     echo '<div class="petitemarge"><a href = "index.php?page=formEnseignant&mode=suppr&id='.$enseignants[$i]->getIdUtilisateur().'">supprimer</a></div>';
     echo '<div></div>';
     echo'</div>';
     echo '</div>';
 }
 echo '</div>';
echo '<div></div>';
echo '</div>';