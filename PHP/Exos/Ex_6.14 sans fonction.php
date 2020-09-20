<?php


$val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    while (!ctype_digit($val)) {
        echo (!ctype_digit($val) xor $val < 0) ? "Saisie invalide.\n" : "";
        $val = readline("Entrez le nombre de valeurs que vous voulez saisir :");
    }

$somme = 0;

for($i = 1; $i <= $val; $i++){
    $note[$i] = readline("saisissez la note n°" . $i . ":");
    while ($note < 0 xor !ctype_digit($note[$i])) {
        echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
        $note[$i] = readline("saisissez la note n°" . $i . ":");
    }
    $somme += $note[$i];
}

// Affichage du tableau + les calculs + résultats.
foreach ($note as $elt) {
    echo "[" . $elt . "]" . "\t";

}

echo "\nMoyenne = (".$note[1];
for($i = 2; $i < $val; $i++){
    echo " + ".$note[$i];
}
echo " + ".$note[$val].") / ".$val;


 echo ", soit ".$somme." / ".$val."\n";
 echo "La moyenne de la classe est de :".$moyenne = $somme / $val ."\n";
$nbsup = 0;
foreach ($note as $elt) {
    if($elt > $moyenne){
        $nbsup += 1; 
    }
}
echo "\n Il y a ".$nbsup." notes strictement supérieures à la moyenne de la classe.";

