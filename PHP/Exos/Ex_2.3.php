<?php
$prixHT=readline("Entrez le prix hors taxe de votre article.");
$nbArticle=readline("Entrez le nombre d'article.");
$txTVA=readline("entrez le taux de tva.");

while ($txTVA > 1):
    $txTVA=readline("entrez le taux de tva. Si la tva est de 20 c'est 0.20 par exemple.");
endwhile;

$prixTTC= ($nbArticle*$prixHT)*(1+$txTVA);
Echo "Le prix TTC est de :".$prixTTC. "euros.";