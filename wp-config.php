<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=ho&jZ2+=BxmJ1)ld]p]X|K|z6KZ@,+7M)7zq5L3j,I1:GHP?*;9TV{6%+{wCbR%');
define('SECURE_AUTH_KEY',  't+D,d$IP,YucY+)m]O9e*N!I[tTYFhrsgX5}L@b8,j}H*tZD ^--Y$S~{W^QTxnb');
define('LOGGED_IN_KEY',    'P4T,MK~u|A(i9^>*|{qh6q?5~Qq=l}?(~Yv%Mm#DZ, #!snNy8 xHOtR5M>enU+J');
define('NONCE_KEY',        'Ik5raKy|L.PPAV/1%sy5VE}l$l4[hiftT*EiqiSUreDKnWw@+|CXk#1K{l!-5`):');
define('AUTH_SALT',        '?c)7#+55VyJt+).uE-+%s81-iaU!C)hz+@gYb^-c4n7{^G$xW&UOIT?q`)BK4r#c');
define('SECURE_AUTH_SALT', '{4tS/X(k&Odhqtxukh<wIFiC+wSBMzGEn|/q`j1D<,BY+,=m[#^e];A0fg!Nk?jk');
define('LOGGED_IN_SALT',   'b<iGoPv}8R|Z#GNP*-1_8S[5M@!+)G2j~S|veY4t]l;~?FU5jd`EU7r--SP4D+8A');
define('NONCE_SALT',       'df3w@Z}Y`.3YQAfcA>pO9Yw(0H%*OBc<SI>5UN%{+5RG-T+;4[^_.aWi0QC=@t7{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
