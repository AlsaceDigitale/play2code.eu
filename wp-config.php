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
define('DB_NAME', 'test_play2c_5334');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'test_play2c_5334');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '7dk99SpTCVNxbP7PBW13');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'test-play2c-5334.mysql.dbs.appsdeck.eu:30973/test_play2c_5334');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'l&BhZ w&s~j/R&~EGy`-zCC[?PuCLXa[ }W}4!)j;t+i%/%H#pUtT{>7{#;r~R0)');
define('SECURE_AUTH_KEY',  'e<=>=+tGXn%Lnaplj,7N-W?mVQ>BwHk_17M@JFE:3;uIas/L+WXF0E:K.>D`k*+`');
define('LOGGED_IN_KEY',    '9Hp^P&-eB`@fwuA:a>`OkDY}hM7UH#Wd+ZI(yCngF|n-DKJ:3`lu l3.kgRswpF ');
define('NONCE_KEY',        'JV/W)#sD[C>fY]s2Ht!I4|T3n|7;SxW_m3+Mc)1:QLN>KAZWx}m*tDWg#7B@y6sJ');
define('AUTH_SALT',        'MF0y`L4jX:.{1/7@a-,uXw+{hV^zro|X+0+:mgH LlW _Ph%zb[H+g%-yVTW>7-!');
define('SECURE_AUTH_SALT', '6:A/!G{_OP4pGIZu;2HgLAM~-<-.fORQzZr9x:wru^D%Nir8~df}4BFJz;+@3AY%');
define('LOGGED_IN_SALT',   'dg 1|(&C%*>wupaXb8da*CwP}t*ma+NBQZV[PA|8?-$ZM^pkoWpN`OxfXJ^D~=f~');
define('NONCE_SALT',       '/A~=G$ Bp?l$19:,Q*{C{}o#Li}cGObvPyBDvC|tz&o.JBj~^P<,2pK&-zHJ}-r9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WPCACHEHOME', dirname(__FILE__) . '/wp-content/plugins/wp-super-cache/datas/');
define('WP_CACHE', true);

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
