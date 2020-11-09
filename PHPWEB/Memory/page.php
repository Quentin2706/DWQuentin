<?php
$titre = "Jeu du Memory";
$titrePage = "Jeu de mémoire";
include './head.php';
include './header.php';

for ($i = 1; $i <= 8; $i++) {
    $img[] = $i;
    $img[] = $i;
}

echo '<div id="main">';
for ($i = 1; $i <= 4; $i++) {
    echo '<div class="ligne">
            <div></div>
            <div></div>
            <div></div>';
    for ($j = 1; $j <= 4; $j++) {
        $key = array_rand($img);
        $nb = $img[$key];
        echo '<div class="img">
                <img class="imghidden"src="./images/' . $nb . '.jpg">
                <img class ="imgplage" src="./images/plage.jpg">
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
include './footer.php';
