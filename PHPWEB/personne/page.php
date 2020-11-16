<?php 

include ('head.php');
include ('listepersonne.php');

$compteur = 0;
echo '<div>';
for ($i=0;$i<count($p);$i++) {
    $compteur++;
    echo '<div class="personne colonne">';
        echo '<div>'.strtoupper($p[$i]->getNom()).'</div>'.'<div>'.$p[$i]->getPrenom().'</div>'.'<div>'.$p[$i]->getAge().'</div>';
        echo '</div>';
        if ($compteur == 5) {
        echo '</div>';
        $compteur=0;
        echo '<div>';
        }
}
echo '</div>';
echo '</body>';
echo '</HTML>';