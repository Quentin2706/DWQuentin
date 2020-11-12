<?php

$titre = 'Le systeme solaire';
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
                Le Système Solaire
            </div>
            <div class="centrer margeV">
                <img src="IMG/systeme_solaire.jpg" class="image">
            </div>
            <div class="texte margeV helvetica">
                L’histoire commence il y a 15 milliards d’années lors du Big-Bang. Cet instant 0 donne naissance à l’Univers tel que nous le connaissons aujourd’hui avec son cortège de galaxies, pulsars, quasars et autres. Ce qui nous intéresse est une galaxie de 100 000 années-lumière de diamètre que l’on appelle « Voie Lactée ». A quelques 28 000 années-lumière du centre galactique gravite une étoile de type naine jaune, baptisée « Soleil ». Elle est entourée de 8 planètes et leur cortège de lunes, d’innombrables astéroïdes et autres comètes. C’est notre système solaire.
            </div>
            <div class="texte margeV helvetica">
                Tournoyant dans le disque protoplanétaire, la matière se concentre par endroits en raison de turbulence dans le disque. Cette accumulation aboutit à la formation d’objets de quelques kilomètres de long que l’on appelle les planétésimaux. Par un phénomène d’accrétion, ils vont s’assembler pour constituer les planètes.

La répartition de la matière dans le disque protoplanétaire est l’élément clé dans la nature des planètes. A moins de quatre Unités Astronomiques, on retrouve les éléments lourds qui serviront à former les planètes telluriques et les corps solides de la Ceinture d’astéroïdes. Au-delà, le disque est essentiellement constitué d’éléments volatils. Présents en beaucoup plus grande quantité, ils seront les constituants des planètes géantes gazeuses et des comètes. On estime qu’il aura fallu entre 50 à 100 millions d’années pour former les planètes telluriques contre 10 pour les planètes gazeuses.


            </div>
            <div class="texte margeV helvetica">
                Jupiter est la première à s’être formée. En quelques millions d’années, elle atteint la masse fatidique d’une dizaine de fois celle de la Terre et commence sa lente migration vers le Soleil. Son déplacement vers l’intérieur du système solaire ne se fera pas sans heurts. Elle éjecte une bonne partie des astéroïdes vers l’extérieur et nettoie au passage l’orbite de Mars dont la croissance s’interrompt brutalement en quelques millions d’années. Saturne n’est pas en reste puisqu’elle suit les pas de Jupiter et rattrape sa sœur jusqu’à ce qu’elles entrent en résonance 3:2. Jupiter accomplit trois orbites autour du Soleil pendant que Saturne n’en compte que deux. La résonance orbitale entre les deux planètes les pousse à retourner vers leur orbite d’origine. Au passage, elles perturbent à nouveau la Ceinture d’astéroïdes qui perd alors 99,9 % de sa masse. La migration de Jupiter aurait eu pour effet de propulser des astres primitifs formés au-delà de l’orbite de la planète vers la Ceinture d’astéroïdes. La planète naine Cérès, son plus grand représentant, pourrait être l’un de ces astres primitifs. Cet aller/retour de Jupiter et Saturne se serait étalé sur à peine un million d’années.
            </div>
            <div class="texte margeV helvetica">
                Les géantes gazeuses ont retrouvé leur orbite d’origine mais ne sont pas encore sur leur orbite définitive. La Ceinture de Kuiper, qui s’étend alors de 15 à 30 UA et contenant mille fois plus de comètes, va jouer un rôle essentiel dans la nouvelle migration des planètes. Neptune qui longe le périmètre intérieur de la Ceinture de Kuiper commence le bal en perturbant l’orbite de l’un ou l’autre astre qui se retrouvent alors catapulté vers l’intérieur du système solaire. Les planètes et le Soleil vont se renvoyer des milliers de comètes au cours d’une partie de billard cosmique. Ce petit jeu a pour effet de modifier peu à peu l’orbite des planètes. En injectant les comètes vers le Soleil, les planètes compensent en s’éloignant de celui-ci. A l’inverse, si elles éjectent vers l’extérieur du système solaire, ça les pousse vers notre étoile. Alors que Jupiter va se rapprocher du Soleil, les autres planètes géantes vont s’éloigner jusqu’à ce que Jupiter et Saturne entrent en résonance 2:1.
            </div>
            <div class="texte margeV helvetica">
                L’entrée en résonance des deux plus grandes planètes va être à l’origine d’un des plus intenses bombardements de notre système solaire. Uranus et Neptune sont propulsées vers l’extérieur jusque la Ceinture de Kuiper, lorsque ce n’est pas à l’intérieur comme cela a été le cas pour Neptune. A l’instar de Jupiter avec la Ceinture d’astéroïdes, Neptune va opérer un nettoyage par le vide, éjectant les comètes les unes après les autres hors de leur orbite. Certaines d’entre elles vont croiser Jupiter et être catapultées très loin du Soleil pour former le Nuage d’Oort. D’autres vont plonger vers l’intérieur du système solaire et être à l’origine de ce que les scientifiques appellent le « Grand Bombardement Tardif » qui aurait duré 1,5 milliard d’années. Suite à cet évènement, la Ceinture de Kuiper aurait perdu plus de 90 % de son contenu en comètes.
            </div>
        </div>
        </div>';

if (file_exists("./PHP/VIEW/footer.php")) {
    include("./PHP/VIEW/footer.php");
} else {
    echo "erreur";
}

?>