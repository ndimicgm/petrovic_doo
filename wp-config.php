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
define('DB_NAME', 'petrovic_doo');

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
define('AUTH_KEY',         '_N(>1Tf~^@k2M.ZZ-!)d4O.7P~EP?kod=Och4QqZg+kP1}1Im?[yc{0}s<rw=~y+');
define('SECURE_AUTH_KEY',  '3L`g#dScDtA$=eWB+Ex!_sPS&wTY?= Ny|d>-HC+6f=W!=H@kTCNInc+H|syOUF)');
define('LOGGED_IN_KEY',    '5aXy=QMc>*IjRPOrKTm(f5Jn,%lAZD6BiV/nkoLT`O%l]`Mj6?tpl68esy*uzu<N');
define('NONCE_KEY',        'B]cGS!6NAoUkvHH}#cUos.0aL)_L(I4T]@iM!:y*!xz;cx;~g!_$H^lfxCq?fTms');
define('AUTH_SALT',        '}/}-27=FnrypV{dJE!$%t5P]0/QXb|kR1I5U^qNJHoJCC0FAz>Tx|r,XE(?ov*/Q');
define('SECURE_AUTH_SALT', 'J:m&uCVHO<$93|anNvWIc5.`.9y=sP^W)iGo)G?X{iOuFbG{KEzBjj^Vb_?a1mB~');
define('LOGGED_IN_SALT',   'w=Y`zEMcRNa]QKN&K@isiU5;!k^-W:E18:RAb$X&@XL3J(9~=rqjjl#ny{,YEy#J');
define('NONCE_SALT',       'Y#F{WUbZB445]QHr`.vD4jPeO/Ou}*wr$)-1P-`ma*_gr!rs?Y|lP1Yzbf:5xqb)');

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
