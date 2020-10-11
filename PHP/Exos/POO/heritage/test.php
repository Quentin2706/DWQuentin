<?php 

function ChargerClasse($Classe)
{
    require $Classe.".Class.php";
}
spl_autoload_register("ChargerClasse");


$rect1 = new Rectangle (["longueur"=>5, "largeur"=>3]);

echo "Rectangle :\n ".$rect1->afficherRectangle();

$trianglerectangle1 = new TriangleRectangle(["base"=>4,"hauteur"=>5]);

echo "\n\nTriangle Rectangle :\n".$trianglerectangle1->afficherTriangle();

$cercle1 = new Cercle(["diametre"=>5]);

echo "\n\nCercle :\n".$cercle1->afficherCercle();

$pave1 = new Pave (["longueur"=> 9, "largeur"=> 3, "hauteur"=>2]);
echo "\n\nPavé : \n".$pave1->afficherPave();

$sphere1 = new Sphere (["diametre"=> 8]);
var_dump($sphere1);
echo "\n\nSphere : \n".$sphere1->afficherSphere();

$pyramide1 = new Pyramide(["base"=>4,"hauteur"=>5]);
echo "\n\nPyramide : \n".$pyramide1->afficherPyramide();