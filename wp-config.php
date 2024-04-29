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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b&mJG2%1`;^Gs{SNZQI}<?}Zua]nB`FYd}~P3Hk7=_Cy8p}x;,0Qmo4!)ySK6CXz' );
define( 'SECURE_AUTH_KEY',  'coztxP8}b.56M*+Gc(,ILbGWG0.;)Y/L,nI-qHe/BZF=TK&1e!z`{y7&w0t*kq|j' );
define( 'LOGGED_IN_KEY',    '+R)/&w6Rc!$O1`k_Q`@6=~,;%e5X_=v00^MbdxGD]KVga#6^z[?{1CYbL|v` b-z' );
define( 'NONCE_KEY',        'z-Xh*/!Lo~Jg4k,$&/I`vO.[P2fcL*3IGEYm1% z5VoxC*(rq%~UsM4RioF~r^U[' );
define( 'AUTH_SALT',        'H$Xamu}kLh;ck|00W&@}[hPI+@~yjFW:9kO&wu]m#TVQbBr-E45Ac.kP;t<14uaD' );
define( 'SECURE_AUTH_SALT', 'cn)0mb;3?w_M(lnHgJIQYumx CV*weB%]9oioq^r,^CncS%>37M4w^;}):5NGJoS' );
define( 'LOGGED_IN_SALT',   'nyv|h`gtkL[DC|]`k9fsf~MB*WRY]Y?s[iaSBY&E80B4TFC!,!c_YhbA2EE,@pV,' );
define( 'NONCE_SALT',       'HW(bLZ-66>H fBf#AqMYknTX77.4{@fBt^[WeH)D#DKn{@:65jAY P~>|s(LMIL=' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
