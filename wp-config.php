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
define( 'WPCACHEHOME', 'C:\wamp64\www\applicationvisitedelieux\wp-content\plugins\wp-super-cache/' );
define( 'WP_CACHE', true );
define( 'DB_NAME', "applicationvisitedelieux" );


/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "root" );


/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "" );


/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         ';;07QVFvuPg1S4/q4Qy:`feE(h>&]0(<F>AG^=pco2kh[& s[EyiI#Je%mh1&ZKB' );

define( 'SECURE_AUTH_KEY',  'kazM-r1$?~9#:pv/.,fEQVf88=hJk4*.Z]7CO&)lLfv-9*w=nPxb@5&2UG7W@`]R' );

define( 'LOGGED_IN_KEY',    'W%[ZA]#XFzU;XUYIp>L3jsDjD&k-}gTkFBzZ]l:L%Y3*0diR9#LHR[WA<*S$1:q&' );

define( 'NONCE_KEY',        '1,1G{3KRv8Q1m6~l;uY:{ld.*w/=ab5$AdE)^wy4R:o]|S^hY[S$M1`[jwsu)r=i' );

define( 'AUTH_SALT',        ':r{k5!a^6Je|kOX3bTBU`ztLI1Kq^*[c~6?%+LKP=omC]Ik/q5ZS/o%z[sc;5uzR' );

define( 'SECURE_AUTH_SALT', 'rM?O:lS5Bg#dwS5p2V$?<[:Q T<juiM{/CG>-d^s.Us8im5u}s/Ku)-ZOy83d|,F' );

define( 'LOGGED_IN_SALT',   '4rDtusX{!9)O}k9`Q@M1]@bZ~2)c|k9YciII!</=Y2=0*1a&G*K6,Yp4k;!o1ZS}' );

define( 'NONCE_SALT',       'DBf?dSOMWIcgr@N@VpF(2[bi<q1i[j^)u(LTsh/<zB^PD!>kxC!J}O;[O*%Zjv|H' );

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
