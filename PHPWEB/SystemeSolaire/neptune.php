<?php
$titre = 'Mercure';
if (file_exists("./PHP/VIEW/head.php")) {
    include("./PHP/VIEW/head.php");
} else {
    echo "erreur";
}

if (file_exists("./PHP/VIEW/header.php")) {
    include("./PHP/VIEW/header.php");
} else {
    echo "erreur";
}

if (file_exists("./PHP/VIEW/nav.php")) {
include("./PHP/VIEW/nav.php");
} else {
echo "erreur";
}

echo '<div class="centrer">
<div class="block vwmain margeV">
    <div class=" centrer helvetica titre">
        Neptune
    </div>
    <div class="centrer margeV">
        <img src="./IMG/neptune.jpg" class="image">
    </div>
    <div class="galaxie block">
        <div>
            <div class="espace"></div>
            <div class="texte helvetica">
            Neptune est la huitième planète en partant du Soleil. Elle orbite à environ 4 milliards de kilomètres et effectue une rotation autour du Soleil en 165 ans. Il s\'agit d\'une planète géante de glaces.

            Neptune est la première planète découverte grâce à des calculs mathématiques.
            
            En effet, cherchant à expliquer les anomalies observées dans le mouvement d\'Uranus, le mathématicien Jean Joseph Urbain Le Verrier déduit l\'existence de Neptune. Il calcula sa position et sa masse.
            </div>
            <div> </div>
            <div> </div>
            <div> </div>
        </div>
        <div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div class="texte helvetica">
            Puis il s\'adressa à son ami Johann Gottfried Galle qui découvrit la planète à 52\'\' de la position indiquée par Le Verrier, le 23 septembre 1846.

            Grande tache sombre
            Cette planète avait déjà été observée en 1795 par Lalande qui l\'avait prise pour une étoile. Et surtout, elle avait été observée 234 ans avant sa découverte par Galilée le 28 décembre 1612 alors qu\'il observait Jupiter et ses quatre satellites galiléens.
            </div>
            <div class="espace"></div>
        </div>
        <div>
            <div class="espace"></div>
            <div class="texte helvetica">
            De plus, Le Verrier avait été devancé par un étudiant de Cambridge, John Adams qui avait localisé la planète dès 1843, mais ses travaux n\'avaient pas été pris au sérieux.

            Voyager 2 fut le seul vaisseau spatial à s\'approcher de cette planète (le 25 août 1989). Tout ce que nous savons à l\'heure actuelle sur Neptune provient essentiellement de cette rencontre.
            
            Neptune tourne sur elle-même en 16 h 06 min.
            </div>
            <div> </div>
            <div> </div>
            <div> </div>
        </div>
        <div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div class="texte helvetica">
            La composition de Neptune est probablement similaire à celle d\'Uranus: des "glaces" et roches diverses avec 15% d\'hydrogène et un peu d\'hélium. Tout comme Uranus, mais contrairement à Jupiter et Saturne, elle ne posséderait pas de structure interne; elle serait plutôt plus ou moins uniforme. Elle possède fort probablement un petit noyau (approximativement de la masse de la Terre) de matériel rocheux. Son atmosphère est principalement composée d\'hydrogène et d\'hélium avec de petites quantités de méthane.
            </div>
            <div> </div>
        </div>
        <div>
            <div class="espace"></div>
            <div class="texte helvetica">
            Son atmosphère est composée essentiellement d\'hydrogène et d\'hélium. Sa couleur bleue est le résultat de l\'absorption de la lumière rouge par le méthane de son atmosphère.

            Neptune possède 14 satellites dont Triton.
            
            Neptune possède des anneaux. Des observations terrestres ne révélèrent que de faibles arcs à la place d\'anneaux complets mais les images de Voyager 2 montrèrent des anneaux complets avec des parties brillantes.
            </div>
            <div> </div>
            <div> </div>
            <div> </div>
        </div>
        <div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div class="texte helvetica">
            Les anneaux de Neptune sont divisés en 5 anneaux semblables : Galle, Le Verrier, Lassell, Arago et Adams.

            Neptune possède également (comme Jupiter) une grande tache sombre (une perturbation atmosphérique) qui s\'étend sur 13000 km.
            
            Le champ magnétique de Neptune est curieusement orienté et probablement généré par des mouvements de matière conductrice (probablement de l\'eau) dans les couches médianes.
            </div>
            <div></div>
        </div>
        <div>
            <div class="espace"></div>
            <div class="texte helvetica">
            L\'énergie qu\'elle reçoit du Soleil est 900 fois inférieure à celle reçue par la Terre et elle émet 2.8 fois plus d\'énergie qu\'elle n\'en reçoit.
            Neptune possède très probablement un noyau solide de silicates et de fer d\'à peu près la masse de la Terre.

Au-dessus de ce noyau, Neptune présenterait une composition assez uniforme (roches en fusion, glaces, 15 % d\'hydrogène et un peu d\'hélium) et non pas une structure " en couches " comme Jupiter et Saturne.

Enfin, Neptune possède une atmosphère composé d\'hydrogène et d\'hélium.
            </div>
            <div> </div>
            <div> </div>
            <div> </div>
        </div>
        <div>
            <div> </div>
            <div> </div>
            <div> </div>
            <div class="texte helvetica">
            Neptune doit son nom au dieu des océans dans la mythologie romaine. C\'est un dieu peu connu, si ce n\'est sous son identification avec le dieu grec Poséidon. Poséidon règne sur la mer : c\'est le frère de Zeus. Il est l\'un des dieux olympiens, fils de Cronos et de Rhéa. Il eut de nombreux enfants, des géants malfaisants. Il fut l\'époux d\'Amphitrite, une Néréide dont il eut, selon certains, un fils, Triton. Poséidon est représenté armé d\'un trident (l\'arme des pêcheurs de thon), sur un char entouré des Néréides et de génies comme Protée.
            </div>
            <div></div>
        </div>
    </div>
</div>
</div>';

if (file_exists("./PHP/VIEW/footer.php")) {
    include("./PHP/VIEW/footer.php");
} else {
    echo "erreur";
}
