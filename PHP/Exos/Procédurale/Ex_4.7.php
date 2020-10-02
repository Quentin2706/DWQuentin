<?php
// age 1
// permis 2
// accident 3
// fid 4
$ANNEEACTUELLE = 2020;
$bonus = 0;
// do {
$age = readline("Quel âge avez-vous ?\n");
$permis = readline("En quel année avez vous obtenu le permis ?\n");
$accident = readline("Combien d'accidents avez-vous fait ?\n");
$fidélité = readline("Le client est-il assuré depuis plus d'un an dans notre compagnie ? Tapez : Y/N\n");
//     if(!ctype_digit($age) && !ctype_alpha($permis) && !ctype_digit($accident) && !ctype_digit($fidélité)){
//         echo "Saisie invalide.\n";
//         echo " \n";
//     }
//     echo ($age < 18) ? "Vous êtes mineur il est impossible que vous ayez le permis." : "";
//     echo ($accident < 0) ? "c'est impossible d'avoir moins de 0 accident." : "";
// } while (!ctype_digit($age) or !ctype_alpha($permis) or !ctype_digit($accident) or !ctype_digit($fidélité) && ($age < 18 or $accident < 0));
while (!ctype_digit($age) or !ctype_digit($permis) or !ctype_digit($accident) or !ctype_alpha($fidélité) && ($age < 18 or $accident < 0)) {
    echo "Saisie invalide.\n";
    echo " \n";
    echo ($age < 18) ? "Vous êtes mineur il est impossible que vous ayez le permis." : "";
    echo ($accident < 0) ? "c'est impossible d'avoir moins de 0 accident." : "";
    $age = readline("Quel âge avez-vous ?\n");
    $permis = readline("En quel année avez vous obtenu le permis ?\n");
    $accident = readline("Combien d'accidents avez-vous fait ?\n");
    $fidélité = readline("Le client est-il assuré depuis plus d'un an dans notre compagnie ? Tapez : Y/N\n");
}
$permis = ($ANNEEACTUELLE - $permis);
$bonus = $fidélité === "Y" ? $bonus += 1 : "";
$bonus = ($age < 25 && $permis < 2) ? $bonus += 1 : "";
$bonus = (($age < 25 && $permis >= 2) or ($age > 25 && $permis < 2)) ? $bonus += 2 : "";
$bonus = ($age >= 25 && $permis >= 2) ? $bonus += 3 : "";

// echo ($accident = 0) ? $bonus = $bonus : "";
// echo ($accident = 1) ? $bonus = ($bonus - 1) : "";
// echo ($accident = 2) ? $bonus = ($bonus - 2) : "";
// echo ($accident > 2) ? $bonus = ($bonus - 5) : "";
$bonus = $accident === 0 ? $bonus +=1 : "";
$bonus = $accident === 1 ? $bonus -=1 : "";
$bonus = $accident === 2 ? $bonus -=2 : "";
$bonus = $accident >= 2 ? $bonus -=10 : "";

echo $bonus >= 0 ? "Vous etes refusé." : "";
echo $bonus === 1 ? "Vous etes tarif rouge." : "";
echo $bonus === 2 ? "Vous etes tarif orange." : "";
echo $bonus === 3 ? "Vous etes tarif vert." : "";
echo $bonus === 4 ? "Vous etes tarif bleu." : "";