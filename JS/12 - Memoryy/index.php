<?php
$titre = "Jeu du Memory";
$titrePage = "Jeu de mémoire";
include './head.php';
include './header.php';

for ($i = 1; $i <= 8; $i++) {
    $img[] = $i;
    $img[] = $i;
}


echo '
<div>
<div id="restart">Recommencer</div>
<div class="enormeFlex"></div>
</div>
<div>
<div id="soluce">Solution</div>
<div class="enormeFlex" ></div>
</div>
<div>
<div></div>
<div id="joueur" class="centre"></div>
<div></div>
</div>
<div>
<div id="nbrcp" class="centre"></div>
<div id="timer" class="centre"></div>
<div id="paire" class="centre"></div>
<div id="prj1div" class="centre"></div>
<div id="prj2div" class="centre"></div>
</div>
<div class="colonne">';
for ($i = 1; $i <= 4; $i++) {
    echo '<div class="ligne">
            <div class="espace"></div>';
    for ($j = 1; $j <= 4; $j++) {
        $key = array_rand($img);
        $nb = $img[$key];
        echo '<div class="img">
                <img draggable="false" class="verso"  src="./images/' . $nb . '.jpg">
                <img draggable="false" class ="recto"  src="./images/plage.jpg">
              </div>';
        array_splice($img,$key,1);
    }
    echo '<div class="espace"></div>
    </div>';
}
echo '<div></div>
    <div></div>
    <div></div>
</div>
';
include './footer.php';
