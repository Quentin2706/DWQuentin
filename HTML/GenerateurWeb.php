<?php

// DEMANDE DE CHOIX DU CHEMIN DE LA CREATION DU DOSSIER
do {
    $choix = ucfirst(readline("Voulez vous créer le projet dans le dossier où se situe GenerateurWeb.php ? (O/N) : "));
    echo (strlen($choix) > 1 || ($choix != "O" && $choix != "N")) ? "Ecrivez O ou N\n" : "\n";
} while (strlen($choix) > 1 || ($choix != "O" && $choix != "N"));
$choix == "O" ? $choix = true : $choix = false;

// SI L'UTILISATEUR SOUHAITE GENERER LE DOSSIER DU PROJET DANS UN AUTRE REPERTOIRE
if ($choix == false) {
    do {
        $wrongpath = false;
        $path = readline("Entrez le chemin pour la création du projet (clique-droit pour coller) : ");
        is_dir($path) ? $wrongpath = false : $wrongpath = true;
        echo $wrongpath == true ? "Le chemin d'accès n'existe pas.\n" : $wrongpath = false;
    } while ($wrongpath == true);

    do { // LA DEUXIEME BOUCLE SERT A VERIFIER QUE LE CHEMIN D'ACCES QUE L'UTILISATEUR A SAISI EST VALIDE
        do { // LA PREMIERE BOUCLE SERT A VERIFIER QUE LE NOM DU PROJET EST VALIDE
            $nomprojet = ucfirst(readline("Donnez le nom de votre projet : "));
            echo strlen($nomprojet) < 1 ? "Vous devez donner un nom a votre projet !\n" : "";
        } while (strlen($nomprojet) < 1);
        $repository = $path . '/' . $nomprojet;
        echo is_dir($repository) ? "Ce nom de dossier existe déjà.\n" : "";
    } while (is_dir($repository));

    // CREATION DES DIFFERENTS DOSSIERS DU PROJET WEB
    mkdir($path . '/' . $nomprojet, 0777, true);
    mkdir($path . '/' . $nomprojet . '/IMG', 0777, true);
    mkdir($path . '/' . $nomprojet . '/DOCS', 0777, true);
    mkdir($path . '/' . $nomprojet . '/HTML', 0777, true);
    mkdir($path . '/' . $nomprojet . '/CSS', 0777, true);
    mkdir($path . '/' . $nomprojet . '/JS', 0777, true);
    mkdir($path . '/' . $nomprojet . '/PHP', 0777, true);
    mkdir($path . '/' . $nomprojet . '/SQL', 0777, true);
    mkdir($path . '/' . $nomprojet . '/PHP' . '/MODEL', 0777, true);
    mkdir($path . '/' . $nomprojet . '/PHP' . '/VIEW', 0777, true);
    mkdir($path . '/' . $nomprojet . '/PHP' . '/CONTROLLER', 0777, true);

    // CREATION DES DIFFERENTS FICHIERS DU PROJET WEB
    $HTML_file = fopen($path . '/' . $nomprojet . '/HTML/' . 'index.html', "w");
    $CSS_file = fopen($path . '/' . $nomprojet . '/CSS/' . 'style.css', "w");
    $JS_file = fopen($path . '/' . $nomprojet . '/JS/' . 'script.js', "w");
    $GENERAL_INDEX_file = fopen($path . '/' . $nomprojet . '/' . 'index.php', "w");
    $VIEW_HEADPHP_file = fopen($path . '/' . $nomprojet . '/VIEW/' . 'head.php', "w");

    // INSERTION DES FICHIERS DE PROTECTIONS DE NIVEAU 1
    $IMG_security = fopen($path . '/' . $nomprojet . '/IMG/' . 'index.php', "w");
    $DOCS_security = fopen($path . '/' . $nomprojet . '/DOCS/' . 'index.php', "w");
    $HTML_security = fopen($path . '/' . $nomprojet . '/HTML/' . 'index.php', "w");
    $CSS_security = fopen($path . '/' . $nomprojet . '/CSS/' . 'index.php', "w");
    $JS_security = fopen($path . '/' . $nomprojet . '/JS/' . 'index.php', "w");
    $PHP_security = fopen($path . '/' . $nomprojet . '/PHP/' . 'index.php', "w");
    $MODEL_security = fopen($path . '/' . $nomprojet . '/PHP' . '/MODEL/' . 'index.php', "w");
    $VIEW_security = fopen($path . '/' . $nomprojet . '/PHP' . '/VIEW/' . 'index.php', "w");
    $CONTROLLER_security = fopen($path . '/' . $nomprojet . '/PHP' . '/CONTROLLER/' . 'index.php', "w");
    $SQL_security = fopen('./' . $nomprojet . '/SQL/' . 'index.php', "w");

    // MESSAGE DE CONCLUSION DU PROGRAMME
    echo is_dir($repository) ? "Le dossier a été crée avec succès." : "Le dossier n'a pas été crée, un problème est survenu, verifiez le répertoire de destination.";

} else { // SINON L'UTILISATEUR SOUHAITE GENERER LE DOSSIER DANS LE MEME REPERTOIRE QUE LE FICHIER GENERATEURWEB.PHP

    do { // LA DEUXIEME BOUCLE SERT A VERIFIER QUE LE CHEMIN D'ACCES QUE L'UTILISATEUR A SAISI EST VALIDE
        do { // LA PREMIERE BOUCLE SERT A VERIFIER QUE LE NOM DU PROJET EST VALIDE
            $nomprojet = ucfirst(readline("Donnez le nom de votre projet : "));
            echo strlen($nomprojet) < 1 ? "Vous devez donner un nom a votre projet !\n" : "";
        } while (strlen($nomprojet) < 1);
        $repository = './' . $nomprojet;
        echo is_dir($repository) ? "Ce nom de dossier existe déjà.\n" : "";
    } while (is_dir($repository));

    // CREATION DES DIFFERENTS DOSSIERS DU PROJET WEB
    mkdir('./' . $nomprojet, 0777, true);
    mkdir('./' . $nomprojet . '/IMG', 0777, true);
    mkdir('./' . $nomprojet . '/DOCS', 0777, true);
    mkdir('./' . $nomprojet . '/HTML', 0777, true);
    mkdir('./' . $nomprojet . '/CSS', 0777, true);
    mkdir('./' . $nomprojet . '/JS', 0777, true);
    mkdir('./' . $nomprojet . '/PHP', 0777, true);
    mkdir('./' . $nomprojet . '/SQL', 0777, true);
    mkdir('./' . $nomprojet . '/PHP' . '/MODEL', 0777, true);
    mkdir('./' . $nomprojet . '/PHP' . '/VIEW', 0777, true);
    mkdir('./' . $nomprojet . '/PHP' . '/CONTROLLER', 0777, true);

    // CREATION DES DIFFERENTS FICHIERS DU PROJET WEB
    $HTML_file = fopen('./' . $nomprojet . '/HTML/' . 'index.html', "w");
    $CSS_file = fopen('./' . $nomprojet . '/CSS/' . 'style.css', "w");
    $JS_file = fopen('./' . $nomprojet . '/JS/' . 'script.js', "w");
    $GENERAL_INDEX_file = fopen('./' . $nomprojet . '/' . 'index.php', "w");
    $VIEW_HEADPHP_file = fopen('./' . $nomprojet . '/VIEW/' . 'head.php', "w");

    // INSERTION DES FICHIERS DE PROTECTIONS DE NIVEAU 1
    $IMG_security = fopen('./' . $nomprojet . '/IMG/' . 'index.php', "w");
    $DOCS_security = fopen('./' . $nomprojet . '/DOCS/' . 'index.php', "w");
    $HTML_security = fopen('./' . $nomprojet . '/HTML/' . 'index.php', "w");
    $CSS_security = fopen('./' . $nomprojet . '/CSS/' . 'index.php', "w");
    $JS_security = fopen('./' . $nomprojet . '/JS/' . 'index.php', "w");
    $PHP_security = fopen('./' . $nomprojet . '/PHP/' . 'index.php', "w");
    $MODEL_security = fopen('./' . $nomprojet . '/PHP' . '/MODEL/' . 'index.php', "w");
    $VIEW_security = fopen('./' . $nomprojet . '/PHP' . '/VIEW/' . 'index.php', "w");
    $CONTROLLER_security = fopen('./' . $nomprojet . '/PHP' . '/CONTROLLER/' . 'index.php', "w");
    $SQL_security = fopen('./' . $nomprojet . '/SQL/' . 'index.php', "w");

    // MESSAGE DE CONCLUSION DU PROGRAMME
    echo is_dir($repository) ? "Le dossier a été crée avec succès." : "Le dossier n'a pas été crée, un problème est survenu, verifiez le répertoire de destination.";
}

// CREATION DES VARIABLES PERMETTANT D'ECRIRE DANS LES FICHIERS CORRESPONDANTS
if (is_dir($repository)) {
    $HTML_snippet = '<!doctype html>' . "\n"
        . '<html lang="fr">' . "\n"
        . '<head>' . "\n"
        . "\t" . '<meta charset="utf-8">' . "\n"
        . "\t" . '<title>Titre de la page</title>' . "\n"
        . "\t" . '<link rel="stylesheet" href="../CSS/style.css">' . "\n"
        . "\t" . '<script src="../JS/script.js"></script>' . "\n"
        . '</head>' . "\n"
        . '<body>' . "\n"
        . "\t" . '<header></header>' . "\n"
        . "\t" . '<nav></nav>' . "\n"
        . "\t" . '<!-- Le reste du contenu -->' . "\n"
        . "\t" . '<footer></footer>' . "\n"
        . '</body>' . "\n"
        . '</html>' . "\n";

    $CSS_snippet = '/****  GENERAL ****/' . "\n"
        . 'html, body {' . "\n"
        . "\t" . 'margin : 0;' . "\n"
        . "\t" . 'padding : 0;' . "\n"
        . '}' . "\n\n"
        . 'div, header, footer, nav, article {' . "\n"
        . "\t" . 'display : flex;' . "\n"
        . "\t" . 'flex : 1;' . "\n"
        . '}' . "\n\n"
        . 'img, video {' . "\n"
        . "\t" . 'width : 100%;' . "\n"
        . '}' . "\n\n";

    $ERROR_snippet = '<?php // fichier de protection des dossiers. ?>' . "\n" . '<h1>ERROR 404 NOT FOUND<h1>';

    $HEADPHP_snippet = '<!doctype html>' . "\n"
        . '<html lang="fr">' . "\n"
        . '<head>' . "\n"
        . "\t" . '<meta charset="utf-8">' . "\n"
        . "\t" . '<title><?php echo $titre ?></title>' . "\n"
        . "\t" . '<link rel="stylesheet" href="./CSS/style.css">' . "\n"
        . "\t" . '<script src="./JS/script.js"></script>' . "\n"
        . '</head>' . "\n";

    $INDEXPHP_snippet = '<?php'
        . "\n" . '$titre = "Ton titre infobulle";'
        . "\n" . 'include (./VIEW/\'head.php\');';

// ECRITURE DU TEXTE CONTENU DANS LES VARIABLES CI-DESSUS
    fputs($HTML_file, $HTML_snippet);
    fputs($CSS_file, $CSS_snippet);
    fputs($GENERAL_INDEX_file, $INDEXPHP_snippet);
    fputs($VIEW_HEADPHP_file, $HEADPHP_snippet);

// ECRITURE DES PAGES ERROR 404 NOT FOUND DNAS LES FICHIERS DE SECURITE DE NIVEAU 1
    fputs($IMG_security, $ERROR_snippet);
    fputs($HTML_security, $ERROR_snippet);
    fputs($CSS_security, $ERROR_snippet);
    fputs($JS_security, $ERROR_snippet);
    fputs($PHP_security, $ERROR_snippet);
    fputs($MODEL_security, $ERROR_snippet);
    fputs($VIEW_security, $ERROR_snippet);
    fputs($CONTROLLER_security, $ERROR_snippet);
    fputs($SQL_security, $ERROR_snippet);

} else {
    echo "Un problème est survenu lors de l'insertion du texte dans les différents dossiers.";
}
