<?php

//$_SERVER = DBNAME, HOST, USER, PASSWORD
$tmpTab = explode(";", $_SERVER['MYSQLCONNSTR_localdb']);
$parametersList = array();
for($i = 0; $i < sizeof($tmpTab); $i++) {
    array_push($parametersList, explode("=", $tmpTab[$i])[1]);
}

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
define('DB_NAME', $parametersList[0]);

/** Utilisateur de la base de données MySQL. */
define('DB_USER', $parametersList[2]);

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', $parametersList[3]);

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', [$parametersList[1]]);

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
define('AUTH_KEY',         '`Abs}.dES>78exaDVW-!{EBRMUHT]iEw}d14NA3p{ilkHrCo[+bPh`5&*_$dhfo6');
define('SECURE_AUTH_KEY',  'Nw@<M,b 1CRRz7!j-yS#EZtiTUUR1h;P$^n-8}]PF+R5@=FmhP`bd=sl])k$_:7-');
define('LOGGED_IN_KEY',    'CM1NmyB|z2S=]%J5mrKgR&LM6v|m#c|n/f7@_kF`AXl-IAvdLi9[qI9Tm-&s z5%');
define('NONCE_KEY',        ']h?)y=dP|[j|x,F7HDMiE5}-N)MtO*2BU]b5sn4NZGq{I2+?vX HZ<AZcC1ho(0|');
define('AUTH_SALT',        'zJD^P+k--Jy=24&bT[>%r;{$5-*CvGz=3zA{>NiNG@vme+3Z|<0?&|i&{9JAETJR');
define('SECURE_AUTH_SALT', '4f@*(hu?he6U4 9Zz*<:k*)}])ps:K:He|&H.d<Y]<$xP`GmIlN*~P${M<q{/;js');
define('LOGGED_IN_SALT',   'c$aV+O_hm[=+xt3_x= m.ERTASrf$}{U3a@VRk(?-S>SAuX)tH-p5a;PIE-RBcd%');
define('NONCE_SALT',       'PmU|OW}blC5@O-+!.$BaE^kaN<3k-3- EV-C,+s+1c.=!s3D*4fwEk*9@>_di3;6');
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
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');