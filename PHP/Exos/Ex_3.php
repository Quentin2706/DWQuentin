<?php

for($i = 1; $i <=12;$i++){
    Echo "\n";
    Echo "====== Table de ";
    Echo $i;
    Echo " ======";
    Echo "\n";
    for($j = 1; $j <=12; $j++){
        $return = $i*$j;
        Echo $i;
        Echo" x ";
        Echo $j;
        Echo "\t = \t";
        Echo $return;
        Echo "\n";
    }
}