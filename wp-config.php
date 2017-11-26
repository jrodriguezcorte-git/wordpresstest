<?php
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[8dCgT=h+Tl!hM$zcG 7)5jl#4`bRH=6}atQEs%bw7QHK,{eCQ3M_mmMnac=3+/{');
define('SECURE_AUTH_KEY',  '#wUpW1a1>;C+^m@7t#|3:|a5d_0W1F}D.|lG(Gy0aQ!8Eyh<O;b6`GE$) osd^3t');
define('LOGGED_IN_KEY',    'R-6^vm6DSIL Nb?+U8y14RZh^)L~#t:[#BoOr^*aJ2Wk|2=sHGDT&wFSq[#AZtm#');
define('NONCE_KEY',        'sj)vHtuoQ)~*seE$*&ehLE/axf0Qd0Q1D)>R<@bbfJ97[S/zs_:LdW_.;l1-9@=N');
define('AUTH_SALT',        'E]i_ DT76|B~^bv>26^5.+O7!LBVG&+ dwBv3,=3_>IAR~}-?yFx_W{-0EB&ZuPT');
define('SECURE_AUTH_SALT', '/FFO-h9,|3R^B,]]ZI{AsI]x6*|RPY6fED$F=(V(i95zyMKQqYu:b.5JI{sQ,M^!');
define('LOGGED_IN_SALT',   '@U)`<XQ(:yo|Jq]2a$_{fEgLb@4ffx{Hx0$koE,e[;IRa%h3lSZG jes|| ~iZvS');
define('NONCE_SALT',       '4ou):#wi!s<Y5KP{F7eTAr 9%*yuO!/D;!gR vWa|EFYE_*WE&1K#WoqH.1+H3DX');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
