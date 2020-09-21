<?php

require "../../function.php";

$tab=creationTableauinconnu();
$consecutif="false";
for($i=2;$i<=count($tab);$i++){
    // $tab[$i] == $tab[$i - 1] + 1 or ($tab[$i] == $tab[$i - 1] - 1) ? $consecutif="true" : "";
    if(($tab[$i] == $tab[$i-1]+1) or ($tab[$i] == $tab[$i - 1] - 1)){
        $consecutif="true";
    }
}

echo ($consecutif==="true") ? "C'est consécutif" : "Ce n'est pas consécutif";