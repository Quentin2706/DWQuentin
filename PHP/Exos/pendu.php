<?php
require "../../function.php";
// $tab = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
// Echo "Cette méthode doit donner B O N J O U R et ca donne : ";

function affichertableau($tableau) {
    foreach ($tableau as $elt) {
        echo  $elt. " ";
    }
}

// affichertableau($tab);

// $test = "bonjour";

function coderMot($t)
{
    $t=str_split($t);
    for ($i=0;$i<count($t);$i++) {
        $t[$i]="_";
    }
    return $t;
}
// echo "Cette méthode doit donner _ _ _ _ _ _ _ et ca donne : " ; afficherTableau(coderMot($test));
function testerLettre($lettre,$tableau,$depart){
    for($i=$depart;$i<$tableau;$i++){
        do{
        array_search($lettre,$tableau);
    } while(is_nan(array_search($lettre,$tableau)));
    return $positions;
}
}

$positions = testerLettre('O', $t,0);
foreach ($positions as $pos)
{
    echo("position : ".$pos."\n");
}
Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;

