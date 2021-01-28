<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4<?;=Z{Wg=-y$VnBYvy!Ppt|FV:unww[z;J*Y%vo6.<{ZFbT2z@0~`f!dvm8M/,i' );
define( 'SECURE_AUTH_KEY',  'nC8pN+LWdb H$,8OU3/M~$yO|rt36}9Vu2;u5^nD0Uq0}PSbFPS9b[2wKvPTLuMS' );
define( 'LOGGED_IN_KEY',    'aT6`Bn@MnkMrj!/[/SC7p,2d>5)9[ekAVCVf0G sI]Hr7R;q4Qb>[;}{iu/.Fw+N' );
define( 'NONCE_KEY',        'w0Jk]YdQ,N@g2O?T^pkaRMXhyn rr5g{&Hg,!S|LOZ~@q$<gOU6;M=p}5-6x]*%6' );
define( 'AUTH_SALT',        ';Jt>LMMhC I98-9-dyKPYd[~Z=K_|!@L::8Dz7`,XoGX8v<q88ov9* D&!K[,a%G' );
define( 'SECURE_AUTH_SALT', 'KVA=;y/)B~w57(mYwQM+vX1R=LHNR#+`9whb~@`fADAGbo*RDz=Q_@9bSlE5.^=d' );
define( 'LOGGED_IN_SALT',   '7LXGUNS=)`cEI:UxAuU]aJt6Y(/pBOUgG vaHbSub}H^jX9jrDV[>fVI>{,3)o`&' );
define( 'NONCE_SALT',       ']+>jrL-Tc^:%jUoh3Th~E[7wm=*RDk1^:+&wwK]yFI:l@Q]PCn2u<3Vwv?27d|+b' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
