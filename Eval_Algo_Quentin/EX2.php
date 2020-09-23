<?php 
// on affiche le message de bienvenue du programme ici en l'occurence ce qu'il va executer prochainement. 
echo "\n****\t Table de multiplication \t****\n\n";
Do {
    // on demande le nombre que l'utilisateur veut multiplier de 1 à 10.
$nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
// on calcul a chaque fois jusqu'a 10 et on affiche le détail du calcul
for ($i = 1; $i <= 10; $i++) {
    $return= $i*$nb;
    echo $nb."\t x ".$i."\t = ".$return."\n";
}
    // on demande a l'utilisateur s'il veut refaire une saisie si oui on refait une boucle sinon on sort de la boucle
$restart = readline("Voulez vous continuer ? ");
} while ($restart == "O");
