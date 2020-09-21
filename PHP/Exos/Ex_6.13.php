<?php

include ("../../function.php");

$tab=creationTableauinconnu();
echo "la valeur la plus haute est :".max($tab).", elle se trouve à la position : ".array_search(max($tab),$tab);