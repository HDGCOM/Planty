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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '0/!VX{[(6{$bv*?(S,oiQ/w]xxPVF: >oW{Dp(V)-:QA*4&=s);`v6N>-gXO7#L<' );
define( 'SECURE_AUTH_KEY',  'ANKFj@8`G=dMV|nXI0;eMwq?&oaqyD07>(U:B[u {86Dnb^bJi8DR@I~Jl.R`}(I' );
define( 'LOGGED_IN_KEY',    ')]J}LLUYDT iw@E66BW3n&]PBp-z;H6y?e/al#%`XPS^KWC|8@c8VtF4hb9rl!,8' );
define( 'NONCE_KEY',        'W2JJ@W4SaL4*%&V1_6E6X*b-@YZ_kjO{AG(>G,AcoK.{:xAwv_nF9{_m^^^i&drH' );
define( 'AUTH_SALT',        '6VFxRh3{O}}Qr%aP2O)-wdgIGEt)i|_[~-eX(pe.)jVjX5#ogkL7#NhD(>9eE/%$' );
define( 'SECURE_AUTH_SALT', '%qzqiZn=E:p%){Y#pJq=OjdM@&%+9I5WT)]tW%dn-(M02+Gr=0.w/t,GfcU#&^*9' );
define( 'LOGGED_IN_SALT',   'd642Ijj|d5R,+T<8)BAQ#d5}/W?`pPVm^_XZC]`:jjl2o}D/M6+A:&T~$+=;41?(' );
define( 'NONCE_SALT',       'dj$Y^)VyI^,Elf{HiIqpn { 5(Z8rK}Idp}bI)FJIH#L*@KaAv}]eOq.f6</mKNv' );
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
