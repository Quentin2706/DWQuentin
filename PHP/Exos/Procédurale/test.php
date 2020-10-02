<?php
// require "../../function.php";
// $tab= [["f",".","."],
//         ["f",".","."],
//         ["f",".","."]];
// $numCol= 0;
// function trouverCase($plateau,$numCol){
//     for($i=(count($plateau)-1);$i>=0;$i--){
//         var_dump(count($plateau));
//         if($plateau[$i][$numCol]=="."){
//             $tabPositions[0]=$i;
//             $tabPositions[1]= $numCol;
//             return $tabPositions;
//         }
//     }
//     return -1;
// }

// Initialisation du mot
$mot = "carrément";

// la fonction
function inversermot($mot){
    $long=strlen($mot);
    if ($mot[$long-1])==0){
        return $mot[$long];
    } else { 
        $long--;    
        return inversermot($mot);
    }
}
$reverse= inversermot($mot);
echo $reverse;
