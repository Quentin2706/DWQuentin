<?php
if(isset($_SESSION['user']))
{
     if($_SESSION['user']->getIdMatiere() != 1)
     {
          $suivis = SuiviManager::getByMatiere($_SESSION['user']->getIdMatiere());
     } else {
          $suivis = SuiviManager::getList();
     }
}
echo '<div class = "colonne margeV bcgmain">';
echo '<div>';
echo '<div></div>';
echo '<div class="bouton centrer"><a class="ajout btn" href ="index.php?codePage=FormSuivi&mode=ajout">Ajouter un Suivi</a></div>';
echo '<div></div>';
echo '</div>';
echo '<div>';
echo '<div></div>';
 echo'<div class="colonne">';
 for ($i = 0; $i < count($suivis); $i++)
 {
     echo '<div>';
     echo '<div class="listelib centrer">'.$suivis[$i]->getEleve()->getNomEleve().'</div>';
     echo '<div class="listelib centrer">'.$suivis[$i]->getEleve()->getPrenomEleve().'</div>';
     echo '<div class="listelib centrer">'.$suivis[$i]->getNote().'</div>';
     echo '<div class="centrer">';
     echo '<div></div>';
     echo'<img src="modifier.png" alt="">';
     echo '<div class="petitemarge"><a href = "index.php?codePage=formSuivi&mode=modif&id='.$suivis[$i]->getIdSuivi().'">modifier</a></div>';
     if (isset($_SESSION['user']) && $_SESSION['user']->getRole() == 1)
     {
     echo '<div class="petitemarge"><a href = "index.php?codePage=formSuivi&mode=suppr&id='.$suivis[$i]->getIdSuivi().'">supprimer</a></div>';
     }
     echo '<div></div>';
     echo'</div>';
     echo '</div>';
 }
 echo '</div>';
echo '<div></div>';
echo '</div>';
