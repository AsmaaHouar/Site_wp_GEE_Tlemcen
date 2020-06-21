<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tlm_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2xGuK|O&E|+txZ,M^PH[Z%Ee}N7kX{k8w)oIUR`$iL8Ao/,_:vH;>J,y}j3LeI4B' );
define( 'SECURE_AUTH_KEY',  '`9$t~~v:=BX@j3BVG7,Dd4+e<iemai8@H2/6%8X*Sv^G?YbD7v]SHN(B u<_3Pj=' );
define( 'LOGGED_IN_KEY',    'P2!xsPA`cjm/$@ugn%:?zy~u:`pM}-Q)2Svm{G!6TXtKR)4ydL8<_:N4Wqj/i9t!' );
define( 'NONCE_KEY',        '!tnCT],{z9$n?$V+-Ft.gw!m3K}=JbF50zD?/INZZRvHXV.1$s^MiC*z!3AW?Y-.' );
define( 'AUTH_SALT',        'apzn/eNL6`!3VT4axGC5J3~tY]sHrHN,SO9rSGBI?[!61F%ZI]%__^` 1<cj@<;6' );
define( 'SECURE_AUTH_SALT', '[`xHeQj./pZ- )xRn<P!Qf?4p$dc@ayu}hAtdSO_s r??V|H@(b:&c=F|k4Xfs^c' );
define( 'LOGGED_IN_SALT',   'HEv=c}0yc(9!O;ru2EO=U}a>P4JnHvI[oeMP+Kj1yfa)Xbd;vAZJk5cv^4z(_yf{' );
define( 'NONCE_SALT',       'ACWr|voBJDEU?Tar]F^XWzIa+hKH+=C&5@8&Ka!H,ssxm|z8GNZTY1M=dQC8H.Qv' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'gee_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
