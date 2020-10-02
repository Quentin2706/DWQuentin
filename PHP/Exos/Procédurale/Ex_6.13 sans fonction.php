<?php
// initialisation des variables à et on demande le nombre de valeurs a saisir en vérifiant les données
$grand = 0;
$pos = 0;
$nombre = readline("Entrez le nombre de valeurs que vous voulez saisir :");
while (!ctype_digit($nombre)) {
    echo (!ctype_digit($nombre) xor $nombre < 0) ? "Saisie invalide.\n" : "";
    $nombre = readline("Entrez le nombre de valeurs que vous voulez saisir :");
}
// on crée le tableau en vérifiant les données
for ($i = 1; $i <= $nombre; $i++) {
    $note[$i] = readline("saisissez la valeur n°" . $i . ":");
    while ($note < 0 xor !ctype_digit($note[$i])) {
        echo ($note < 0 xor !ctype_digit($note[$i])) ? "Saisie invalide.\n" : "";
        $note[$i] = readline("saisissez la valeur n°" . $i . ":");
    }
    if ($note[$i] > $grand) {
        $grand = $note[$i];
        $pos = $i;
    }
}
// On affiche le tableau
foreach ($note as $elt) {
    echo "[" . $elt . "]" . "\t";
}

echo "\nla valeur la plus haute est :" . $grand . ", elle se trouve à la position : " . $pos . " du tableau";
