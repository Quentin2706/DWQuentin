<?php
$TXTVA= 1.2;
$prixHT=readline("Entrez le prix hors taxe de votre article.");
$nbArticle=readline("Entrez le nombre d'article.");
$prixTTC= ($nbArticle*$prixHT)*$TXTVA;
Echo "Le prix TTC est de :".$prixTTC;