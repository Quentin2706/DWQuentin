<?php

for ($i = 1; $i <= 12; $i++) {
    echo "\n====== Table de " . $i . " ====== \n";
    for ($j = 1; $j <= 12; $j++) {
        $return = $i * $j;
        echo $i . " x " . $j . "\t = \t" . $return . "\n";
    }
}
