<?php
function afficheTableau($emp)
{
    foreach ($emp as $elt) {
        echo "\n" . $elt;
    }
}
class Employe
{

    /* ==========   Attributs   ========== */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_posteOccupe;
    private $_salaire;
    private $_service;
    private static $_nbEmploye = 0;
    private $_agence;
    private $_chequesVacances;
    private $_enfants = [];

    /*==========    Accesseurs   ==========*/
    // *=*=*=**=*=*=  NOM  *=*=*=*=*=*=*=*
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = strtoupper($nom);
    }
    // *=*=*=**=*=*=  PRENOM  *=*=*=*=*=*=*=*
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }
    // *=*=*=**=*=*=  DATEEMBAUCHE  *=*=*=*=*=*=*=*
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }
    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }
    // *=*=*=**=*=*=  POSTE OCCUPE  *=*=*=*=*=*=*=*
    public function getPosteOccupe()
    {
        return $this->_posteOccupe;
    }
    public function setPosteOccupe(string $posteOccupe)
    {
        $this->_posteOccupe = $posteOccupe;
    }
    // *=*=*=**=*=*=  SALAIRE  *=*=*=*=*=*=*=*
    public function getSalaire()
    {
        return $this->_salaire;
    }
    public function setSalaire(int $salaire)
    {
        $this->_salaire = $salaire;
    }
    // *=*=*=**=*=*=  SERVICE  *=*=*=*=*=*=*=*
    public function getService()
    {
        return $this->_service;
    }
    public function setService(string $service)
    {
        $this->_service = $service;
    }
    // *=*=*=**=*=*=  STATIC COMPTEUR  *=*=*=*=*=*=*=*
    public static function getNbEmploye()
    {
        return self::$_nbEmploye;
    }

    public static function setNbEmploye(int $nbEmploye)
    {
        self::$_nbEmploye = $nbEmploye;
    }
    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(Agence $agence)
    {
        $this->_agence = $agence;
    }

    public function getEnfants()
    {
        return $this->_enfants;
    }
    public function setEnfants(Enfants $enfants)
    {
        $this->_enfants = $enfants;
    }
    /*==========    Constructeur   ==========  */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_nbEmploye++;
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*==========    Autres Méthodes   ==========*/

    public function anciennete()
    {
        $aujd = new DateTime('now'); //  On compte le nombre d'année entre aujourdhui et la date précise.
        $diff = $aujd->diff($this->getDateEmbauche());
        $annee = $diff->format("%Y") * 1;
        return $annee;
    }

    private function primeAnciennete()
    {
        $salaire = $this->getSalaire() * 1000; // Salaire exprimé entierement exemple 60K euros devient 60 000.
        return $salaire * (0.05 * $this->anciennete());
    }
    private function primeSalaire()
    {
        $salaire = $this->getSalaire() * 1000; // Salaire exprimé entierement exemple 60K euros devient 60 000.
        return $salaire * (0.02 * $this->anciennete());
    }
    public function prime()
    {
        return ($this->primeAnciennete() + $this->primeSalaire());
    }
    public static function compareToNomPrenom($obj1, $obj2) // Cette fonctino sert juste a trier par nom et prénom

    {
        if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;
        } else if ($obj1->getPrenom() < $obj2->getPrenom()) {
            return -1;
        } else if ($obj1->getPrenom() > $obj2->getPrenom()) {
            return 1;
        }

        return 0;
    }
    public static function compareToServiceNomPrenom($obj1, $obj2) // Cette fonction permet de trier par service puis nom et prenom

    {
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } else if ($obj1->getService() > $obj2->getService()) {
            return 1;
        } else {
            return self::compareToNomPrenom($obj1, $obj2);
        }
    }
    public function masseSalariale()
    {
        return $this->getSalaire() * 1000 + $this->prime();
    }
    public function chequesVacances()
    {
        return $this->anciennete() >= 1 ? "Elligible" : "N'est pas elligible";
    }
    public function afficheEnfants()
    {
        if (!empty($this->getEnfants())) {
            $result = "";
            foreach ($this->getEnfants() as $elt) {
                $result .= $elt->toString();
            }
            return "\n\n======  ENFANTS  =======" . $result;
        }
    }
    public function chequesNoel()
    {
        $chq20 = 0;
        $chq30 = 0;
        $chq50 = 0;
        foreach ($this->getEnfants() as $elt) {
            switch ($elt) {
                case $elt->Age() <= 10:
                    $chq20 += 1;
                    break;
                case $elt->Age() >= 11 && $elt->Age() <= 15:
                    $chq30 += 1;
                    break;
                case $elt->Age() >= 16 && $elt->Age() <= 18:
                    $chq50 += 1;
                    break;
            }
        }
        return $cheques = ($chq20 != 0 || $chq30 != 0 || $chq50 != 0) ? "Oui" : "Non";
        if ($cheques = "Oui") {
            return $tabcheques = [$chq20, $chq30, $chq50];
        }
    }

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString() // Affiche la fiche détail de l'objet en question.

    {
        return "\nNom : " . $this->getNom()
        . "\nPrenom : " . $this->getPrenom()
        . "\nDate d'embauche : " . $this->getDateEmbauche()->format('d-m-Y')
        . "\nPoste Occupé : " . $this->getPosteOccupe()
        . "\nSalaire : " . $this->getSalaire()
        . " K euros \nService : " . $this->getService()
        . "\nChèques vacances : " . $this->chequesVacances()
        . "\nCheque noel : " . $this->chequesNoel()
        . $this->afficheEnfants()
        . "\n\n======  AGENCE  ======="
        . $this->getAgence()->toString();
    }
}
