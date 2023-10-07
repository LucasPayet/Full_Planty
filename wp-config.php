<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bdd_p6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Tp])$_DkD.x&{2pM$|lJppLq?,dpH6:Egi:cDkRxA/;4=$Wq6iwVF>)ZXL!{}|Pw' );
define( 'SECURE_AUTH_KEY',  '64x4XPDSg_`-EpT)0W.BF{BLzz83Jd6~Ib@S~?+xD:K1=v|SDou@)i2A!GGxcs*R' );
define( 'LOGGED_IN_KEY',    'i5.0>MSGF&2>EEq$?>>#e1I%[iy__aFD[m1~_jK_zNQJVl}#D&q^?& /FJaJ9;K{' );
define( 'NONCE_KEY',        '~fR H|xAA*!*wf2Z3-FI6g(Gh^fnO=,iju[(.#=U.TdBZmQ)aBlI.PMh4q j;Osp' );
define( 'AUTH_SALT',        '6lOAzts:o#4w;{6$1W%0c.BmuS,]wT^I8|SB5c:w,h/S>/Yw5<O`n;1B-qw3cbrr' );
define( 'SECURE_AUTH_SALT', '[M^WR%,SG}GCt&ATR@1e0Pg+|$DJPWGsEl~%Ig(#tXUfTor)QuF;CAY` IU@>o.g' );
define( 'LOGGED_IN_SALT',   'o7Wr}j1ySz.?~<2KYR0cN{KD0<Sz`)HRltl8ri4j,U2wbbDc!3T?HVvn*LFc-P8A' );
define( 'NONCE_SALT',       '$r;WS(dO57(Gr~O_CY~`<#^r,?]%7GXSh^<QaQ9yV*Aj:E>`*^n/}Vtrg3l6BD$+' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
