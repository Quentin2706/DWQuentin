<?php
include ('Head.php');
include ('listeemploye.php');

echo '<div class="colonne">';
echo '<div class="bcgbleu titre">';
    echo '<div class="centrer">Agence</div>';
    echo '<div class="centrer">Service</div>';
    echo '<div class="centrer">Nom</div>';
    echo '<div class="centrer">Prénom</div>';
echo '</div>';
    for($i=0;$i<count($e);$i++)
    {
    echo '<div>';
    echo '<a href="detail.php?id='.$e[$i]->getIdEmploye().'">';
    echo '<div class="centrer employe">'.$e[$i]->getAgence()->getNom().'</div>';
    echo '<div class="centrer employe">'.$e[$i]->getService().'</div>';
    echo '<div class="centrer employe">'.strtoupper($e[$i]->getNom()).'</div>';
    echo '<div class="centrer employe">'.$e[$i]->getPrenom().'</div>';
    echo '</a>';
    echo '</div>';
    }
echo '</div>';