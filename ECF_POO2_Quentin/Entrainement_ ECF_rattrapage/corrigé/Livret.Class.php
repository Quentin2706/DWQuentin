<?php

class Livret extends Compte
{
    /***************************** Autres méthodes ******************************************/
    public function appliqueInteret()
    { // on applique 5% d'interêt

        parent::setMontant(parent::getMontant() * 1.05);
    }
}
