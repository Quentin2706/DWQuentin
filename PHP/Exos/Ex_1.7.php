<?php
$a = 5;
$b = 2;
$c = 10;
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;
Echo $a."\n".$b."\n".$c;
// Même principe, la variable temp est une variable qui permet d'échanger les valeurs de A et B et C respectives. Au final A = 10 et B = 5 et C = 2.