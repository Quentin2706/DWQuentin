<?php 

$nb = readline("Entrez un nombre pour y voir sa table de multiplication :");

while (!is_numeric($nb)){
    echo "Saisie incorrecte.\n";
    echo " ";
    $nb=readline("Entrez un nombre pour y voir sa table de multiplication :");   
}
echo " ";
echo "===== La table de multiplication de ".$nb."===== \n";
for ($i = 1; $i <= 10; $i++) {
    $return= $nb*$i;
    echo $i." x ".$nb." = ".$return."\n";
}
