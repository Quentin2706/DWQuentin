<?php
$titre = "Jeu du Memory";
$titrePage = "Jeu de mémoire";
include './head.php';
include './header.php';

for ($i = 1; $i <= 8; $i++) {
    $img[] = $i;
    $img[] = $i;
}
$compteur = 0;
echo '<div id="main">';
echo '<div id="clickClickDiv"></div>';
echo '<div id="divTime"></div>';
echo '<div id="nbPaire"></div>';
for ($i = 1; $i <= 4; $i++) {
    echo '<div class="ligne">
            <div></div>
            <div></div>
            <div></div>';
    for ($j = 1; $j <= 4; $j++) {
        $compteur++;
        $key = array_rand($img);
        $nb = $img[$key];
        echo '<div class="img">
                <img class = "verso" name ="'.$compteur.'" src="./images/' . $nb . '.jpg">
                <img class = "recto" name ="'.$compteur.'" src="./images/ok.jpg">
              </div>';
        // unset($img[$key]);
        // sort($img);
        array_splice($img,$key,1);
    }
    echo '<div></div>
          <div></div>
          <div></div>
    </div>';
}
echo '<div></div>
    <div></div>
    <div></div>
</div>';
echo '<div id="solution">Solution !</div>';
echo '<div id="reload">Recommencer</div>';
include './footer.php';
