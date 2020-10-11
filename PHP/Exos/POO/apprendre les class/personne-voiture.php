<?php 
require "Personne.class.php";
require "Voiture.class.php";



$voiture = new Voiture("Audi", "A3", 20001); 
$pere = new Personne("homme", "Dupont", "Jean-Michel", "40", $voiture);

echo $p1-> toString()."\n";




// $p1 = new Personne("homme", "balair", "quentin", "21");
// $p2 = new Personne("homme", "balair", "quentin", "22");
// echo $p1-> toString()."\n";
// echo $p2-> toString()."\n";
// echo $p1-> compareTo($p2);
// $equal=$p1-> equalsTo($p2);
// echo "\n";
// var_dump($equal);


// $v1 = new Voiture("Audi", "A3", 20001);
// $v2 = new Voiture("Audi", "A3", 20000);
// echo $v1->toString()." \n";
// echo $v2->toString()." \n";
// echo $v1->compareTo($v2);