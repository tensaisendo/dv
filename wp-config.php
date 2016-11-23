<?php 

# BEGIN WP OPTIMIZE BY XTRAFFIC - ADVANCED CACHE #
define('WP_CACHE', true); // Enable cache feature. Added by Wp Optimize Speed By xTraffic
# END WP OPTIMIZE BY XTRAFFIC - ADVANCED CACHE #

/** Enable W3 Total Cache */
// Added by W3 Total Cache


/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'localhost'); // PROD douceursciisa

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root'); // PROD douceursciisa

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', ''); // PROD 45jVlmNeKL34

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', ''); // PROD douceursciisa.mysql.db

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|+O*>DW4)-:vWd!:2]Q#|RMaaCfOU[Sl{1~99>[Wf_`qqx;$]/Yif}Q|eK#c~-M~');
define('SECURE_AUTH_KEY',  'H:hoLU-CO)(jNXtKw?i%?a`|}%.BL/;as^Zfgh)}P]W5G/Mf04+5(&hBx_P_!+d5');
define('LOGGED_IN_KEY',    'O+*|5q]/>p{~X.R$xSWDeX&boIm.y,2{9+`-LR#(v=).ms,65u*8Kk,PtwG|mT)D');
define('NONCE_KEY',        'l#U@A]tZ>E5dm-?.](2GGbK{IV1_RLv5!.oZ^INocF~6J@@8<X~9L|cQ+,.INd&L');
define('AUTH_SALT',        'Hfwx*5>1X^{@N<PXjW4aQ)^M9$Q1D|d;t]b-+M>J>`hH,Qs[h^+7)Lh+f(;BSs@ ');
define('SECURE_AUTH_SALT', '+c(I c-[H1e?*P8-AlRr9?*V]6yy -p ?+]FY$?Q>O:LQl2C0|WV%app62Z&Yr7[');
define('LOGGED_IN_SALT',   'zjHF!o6YfK!#vMIoAzS jcC=tFP+c.l0f,_Od;D,ZtU:yAf!LWSlo~;%~.`w3z+]');
define('NONCE_SALT',       '<sgS3~`-mz<[j+wsv$T|5{XfIJ:2P(G1,B*a?nny-Mz!)>2+E(g/SKURP*zN2fVp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_'; // PROD wp_douceursciisa_

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');