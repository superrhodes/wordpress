<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j112er24' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OIS3 nA-mq1;a/e|MtY_)t]2v,H[-:44p`;!UCz~JsRv+kB[vD.Lp`5w!=E[]j}U');
define('SECURE_AUTH_KEY',  '? 9lFiDOz-,(]Ka0NlN{=_|=1@QL@mOHgN7mh-H uQ&41#and-MyllVzVE.jb[SC');
define('LOGGED_IN_KEY',    'RWW*W!-j!X%FwREAy-uwWj.$sf;/o>9U+qQIo%C_s|yQyoi;M.{>98p`l;ad@Rrr');
define('NONCE_KEY',        'C%[w7W9aN]aBe+^~-?PG-OfQ-I5$NX9eU#$0^Ie<_|=DKDb6^Y*5FLN|6+.V88:3');
define('AUTH_SALT',        'ZXs6:S`P<@.ZAS#vLmP&jVY2v,<g@69~2(V+tR|%@LRlTI?N.EF@zPYDKKB0k6@Z');
define('SECURE_AUTH_SALT', 'f[;o>{R?)px??8MsJb++q/7wW!h;yM0XH?vX6^]Qi1_Sl>AX@.~9c2-RB!(b+RWp');
define('LOGGED_IN_SALT',   'Gr4+LR)?c<zF1jeeDZCgBNsR`f]%*Y3SZ,YsVw.6P>hddx:~ 2>v>.lF+e_Vn5=V');
define('NONCE_SALT',       'tZSaPNI.(u<n._ihZKAs.ZW}4S]AlWv`O]v$X)H+oV2I?Lo{Q@+ [hT57eoj|7nk');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
