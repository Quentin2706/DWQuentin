<?php

include "head.php";

$idRecherche = $_GET['id'];
echo findById($idRecherche);