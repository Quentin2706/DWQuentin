<?php

class Voiture
{
    // ==Attributs==
    private $_marque;
    private $_modele;
    private $_km;

    // Constructeur
    public function __construct(string $marque, string $modele, string $km){
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKm($km);
    }
    // ========    ASSESSEURS  ========= 
       // GETTER
    
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getKm(){
        return $this->_km;
    }
    // SETTER
    public function setMarque(string $marque){
        $this->_marque = ctype_alnum($marque) ? $marque : NULL; 
    }
    public function setModele(string $modele){
        $this->_modele = ctype_alnum($modele) ? $modele : NULL; 
    }
    public function setKm(string $km){
        $this->_km = ctype_digit($km) && strlen($km) < 7 ? $km : NULL; 
    }
// =======================================
//         Autres méthodes ...
public function toString()
    {
        $result = " \nMarque de la voiture : " . $this->_marque . " \nModèle de la voiture : " . $this->_modele . " \nNombre de kilomètres : " . $this->_km;
        return $result;
    }

// EQUALS TO
public function equalsTo(Voiture $obj)
{
    if ($this->_marque == $obj->getMarque() && $this->_modele == $obj->getModele() && $this->_km == $obj->getKm()) {
        return true;
    }
    return false;
}
// COMPARE TO
public function compareTo(Voiture $obj)
{
    if ($this->_km > $obj->getKm()) {
        return 1;
    } elseif ($this->_km < $obj->getKm()) {
        return -1;
    } else {
        return 0;
    }
}
}   


$v1 = new Voiture("Renault", "Clio2", "95000");
$v2 = new Voiture("Audi", "A7", "30000");
echo $v1-> toString()."\n";
echo $v2-> toString()."\n";
echo $v1-> compareTo($v2);
$equal=$v1-> equalsTo($v2);
echo "\n";
var_dump($equal);
