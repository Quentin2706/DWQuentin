<?php
require "../../function.php";
$tab= [["f",".","."],
        ["f",".","."],
        ["f",".","."]];
$numCol= 0;
function trouverCase($plateau,$numCol){
    for($i=(count($plateau)-1);$i>=0;$i--){
        var_dump(count($plateau));
        if($plateau[$i][$numCol]=="."){
            $tabPositions[0]=$i;
            $tabPositions[1]= $numCol;
            return $tabPositions;
        }
    }
    return -1;
}
