<?php
$t[0] = [0, 1, 2, 2, 3];
$t[1] = [3, 4, 5, 2, 3];
$t[2] = [6, 7, 8, 2, 3];
$t[3] = [1, 1, 1, 2, 3];
$t[4] = [1, 1, 1, 2, 3];
// $t[5] = [1, 1, 1,2,3];
// $t[6] = [1, 1, 1,2,3];
// $t[7] = [1, 1, 1,2,3];
echo " ";
for ($i = 0; $i < count($t[0]); $i++) {
    echo "----";
}
echo "-\n";

for ($i = 0; $i < count($t); $i++) {
    echo " | ";
    for ($j = 0; $j < count($t); $j++) {
        if ($j < count($t[0])) {
            echo $t[$i][$j] . " | ";
        }
    }
    if ($i < count($t) - 1) {
        echo "\n ";
        for ($k = 0; $k < count($t[0]); $k++) {
            echo "====";
        }
        echo "=\n";
    }
}
echo "\n ";
for ($i = 0; $i < count($t[0]); $i++) {
    echo "----";
}
echo "-\n";
