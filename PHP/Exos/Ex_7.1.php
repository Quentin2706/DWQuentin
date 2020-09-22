<?php

require "../../function.php";

$consecutif = true;

$tab =creationTableauinconnu();
$i=2;
Do {
    if (($tab[$i] == $tab[$i - 1] + 1) or ($tab[$i] == $tab[$i - 1] - 1)){
        $i++;
    }else {
        $consecutif = false;
    }
}while($i<count($tab) or $consecutif = true);

if ($consecutif = true){
    echo "c'est consécutif";
}else {
    echo "c'est pas consécutif";
}
