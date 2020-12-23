<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <h1>Jeu du Memorie</h1>
    <button id="solution">Solution</button>
    <button id="reset">Reset</button>
    <div id="nbPaire"></div>
</div>




    <?php

for ($i = 1; $i <= 8; $i++) {
    $tab[] = $i;
    $tab[] = $i;
}
$compteur = 1;
for ($a = 1; $a < 5; $a++) {

    echo '<div class="espaceHaut"></div>';
    echo '<div class="espace"></div>';
    echo '<div class="ligne">';

    for ($i = 1; $i < 5; $i++) {
        $compteur++;
        $pos = array_rand($tab);
        $nb = $tab[$pos];
        echo '
            <div class="espace"></div>
            <div class="espace"></div>

            <div class="case">
                <img class="recto" value="' . $compteur . '" src="./img/siri.png" alt="">
                <img class="verso" value="' . $compteur . '" src="./img/' . $nb . '.png" alt="">
            </div>
            <div class="espace"></div>';
        unset($tab[$pos]);
        sort($tab);
    }

    echo '</div>
         <div class="espace"></div>';
}
?>


    <script src="script.js"></script>
</body>
</html>