<?php 

function creationStructure($path, $nomProjet, $nomDB, $repository)
{
        // CREATION DES DIFFERENTS DOSSIERS DU PROJET WEB
        mkdir($path . '/' . $nomProjet, 0777, true);
        mkdir($path . '/' . $nomProjet . '/IMG', 0777, true);
        mkdir($path . '/' . $nomProjet . '/DOCS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/HTML', 0777, true);
        mkdir($path . '/' . $nomProjet . '/CSS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/JS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP', 0777, true);
        mkdir($path . '/' . $nomProjet . '/SQL', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/MODEL', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/VIEW', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/CONTROLLER', 0777, true);
    
        // CREATION DES DIFFERENTS FICHIERS DU PROJET WEB
        $HTML_file = fopen($path . '/' . $nomProjet . '/HTML/' . 'index.html', "w");
        $CSS_file = fopen($path . '/' . $nomProjet . '/CSS/' . 'style.css', "w");
        $JS_file = fopen($path . '/' . $nomProjet . '/JS/' . 'script.js', "w");
        $GENERAL_INDEX_file = fopen($path . '/' . $nomProjet . '/' . 'index.php', "w");
        $VIEW_HEADPHP_file = fopen($path . '/' . $nomProjet .'/PHP' .'/VIEW/' . 'head.php', "w");
        $DBCONNECT_MODEL_file = fopen($path . '/' . $nomProjet .'/PHP' .'/MODEL/' . 'DbConnect.Class.php', "w");
        $SQL_file = fopen($path.'/' . $nomProjet . '/SQL/' . 'script.sql', "w");
    
        // INSERTION DES FICHIERS DE PROTECTIONS DE NIVEAU 1
        $IMG_security = fopen($path . '/' . $nomProjet . '/IMG/' . 'index.php', "w");
        $DOCS_security = fopen($path . '/' . $nomProjet . '/DOCS/' . 'index.php', "w");
        $HTML_security = fopen($path . '/' . $nomProjet . '/HTML/' . 'index.php', "w");
        $CSS_security = fopen($path . '/' . $nomProjet . '/CSS/' . 'index.php', "w");
        $JS_security = fopen($path . '/' . $nomProjet . '/JS/' . 'index.php', "w");
        $PHP_security = fopen($path . '/' . $nomProjet . '/PHP/' . 'index.php', "w");
        $MODEL_security = fopen($path . '/' . $nomProjet . '/PHP' . '/MODEL/' . 'index.php', "w");
        $VIEW_security = fopen($path . '/' . $nomProjet . '/PHP' . '/VIEW/' . 'index.php', "w");
        $CONTROLLER_security = fopen($path . '/' . $nomProjet . '/PHP' . '/CONTROLLER/' . 'index.php', "w");
        $SQL_security = fopen($path . '/' . $nomProjet . '/SQL/' . 'index.php', "w");
    
        // MESSAGE DE CONCLUSION DU PROGRAMME
        echo is_dir($repository) ? "Le dossier a été crée avec succès.\n" : "Le dossier n'a pas été crée, un problème est survenu, verifiez le répertoire de destination.\n";
    
    
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
    
        $DBCONNECT_snippet = '<?php'
        ."\n".'class DbConnect{'
        ."\n\t".'private static $db;'
        ."\n\n\t".'public static function getDb()'
        ."\n\t".'{'
        ."\n\t\t".'return DbConnect::$db;'
        ."\n\t".'}'
        ."\n\n\t".'public static function init()'
        ."\n\t".'{'
        ."\n\t\t".'try {'
        ."\n\t\t\t".'self::$db= new PDO ( \'mysql:host=localhost;dbname='.$nomDB.';charset=utf8\', \'root\', \'\');'
        ."\n\t\t".'}'
        ."\n\t\t".'catch (Exception $e)'
        ."\n\t\t".'{'
        ."\n\t\t\t".'die(\'Erreur :\'. $e->getMessage());'
        ."\n\t\t".'}'
        ."\n\t".'}'
        ."\n".'}';
    
    // ECRITURE DU TEXTE CONTENU DANS LES VARIABLES CI-DESSUS
        fputs($HTML_file, $HTML_snippet);
        fputs($CSS_file, $CSS_snippet);
        fputs($GENERAL_INDEX_file, $INDEXPHP_snippet);
        fputs($VIEW_HEADPHP_file, $HEADPHP_snippet);
        fputs($DBCONNECT_MODEL_file,$DBCONNECT_snippet);
    
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
}
