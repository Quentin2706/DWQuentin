<?php

include "head.php";
include "listeemploye.php";

$idRecherche = $_GET['id'];


foreach ($e as $unemploye)
{
    if ($unemploye->getIdEmploye() == $idRecherche)
    {
        echo '<div class="titre bcgbleu">'.$unemploye->getNom().' '.$unemploye->getPrenom().'</div>';
        echo '<div>';
        echo '<div></div>';
        echo '<div class="flex2">';
            echo '<div class="colonne border">';
            echo '<div class="border">';
            echo '<div class="centrer">Informations</div>';
            echo '<div>';
            echo '<ul>';
            echo '<li>Date d\'embauche : '.$unemploye->getDateEmbauche()->format('Y-m-d').'</li>';
            echo '<li>Poste : '.$unemploye->getFonction().'</li>';
            echo '<li>Salaire : '.$unemploye->getSalaireAnnuel().'</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        
            echo '<div class="border">';
            echo '<div class="centrer">Agence</div>';
            echo '<div>';
            echo '<ul>';
            echo '<li>'.$unemploye->getAgence()->getNom().'</li>';
            echo '<li>Poste : '.$unemploye->getAgence()->getAdresse().'</li>';
            echo '<li>Salaire : '.$unemploye->getAgence()->getCodePostal().' '.$unemploye->getAgence()->getVille().'</li>';
            echo '<li>'.$unemploye->getAgence()->getRestauration().'</li>';
            echo '</ul>';
            echo '</div>'; 
            echo '</div>' ; 

            echo '<div class="border">';
            echo '<div class="centrer">Poste</div>';
            echo '<div>';
            echo '<ul>';
            echo '<li>'.$unemploye->getFonction().'</li>';
            echo '<li>Poste : '.$unemploye->getService().'</li>';
            echo '</ul>';
            echo '</div>'; 
            echo '</div>' ;

            if (count($unemploye->getEnfants()) > 0)
            {
            echo '<div class="border">';
            echo '<div class="centrer">Enfants</div>';
            echo '<div>';
            echo '<ul>';
            for ($i =0; $i<count($unemploye->getEnfants());$i++)
            {
                echo '<li>'.$unemploye->getEnfants()[$i]->getNom().' '.$unemploye->getEnfants()[$i]->getPrenom().' '.$unemploye->getEnfants()[$i]->getAge().' ans</li>';
            }
            echo '</div>'; 
            echo '</div>' ;
            }
            echo '<a href="page.php" class="centrer">Retour</a>';
        echo '</div>';
        echo '<div></div>';
    }
}