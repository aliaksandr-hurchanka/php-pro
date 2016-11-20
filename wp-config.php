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
define('DB_NAME', 'php-pro');

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
define('AUTH_KEY',         'Z@io -@?`;C<fb`@dZbY!R/`9]*OLz}@.-f<X.~(y1x:GY852NPswN$>[VKhca A');
define('SECURE_AUTH_KEY',  '^Fh$2Yre{2RsHT7U?g8VFSNk(Rdr2Rh=KdddToG0@CSMKFGLm`zTieeLNB!}4;{u');
define('LOGGED_IN_KEY',    'y~^l,)P.G#|GBKd%}03s!,eAOC^ZIS~R90Fz>$7rqKsR)FK$MKFSEdY_7NF^7$z;');
define('NONCE_KEY',        'Ms+/cHh%t.upgDVg_j.w^GjTRQVcB|`7|lE8o5i2uWw]kgaZ6o/2p1a]rE7Lb/M{');
define('AUTH_SALT',        'GM1d_fxQ9`y9PF!?@~ S$&/b+Q5dVW(Yh9/i}@H? D8R3DXxoxW 0:`]o $UL.^s');
define('SECURE_AUTH_SALT', 'wafv*9{]@pzsCF8G7%?H{w/ug6x N@#U44|:wgrgN-^@*oRd6^rK2j:{;3Axq xc');
define('LOGGED_IN_SALT',   '^$D?4kLFRS5Mdf^22e8{w&(FoNj=Gl%Yjoy-(obj,=]CL55fEg?yK0h+l~f}Z8(s');
define('NONCE_SALT',       'zCmB$Xa[O<_+hRCSY@|J+>>BXM>#S%mO,X[qKz*{4SSIlH{1:*}ylIF_9j5mT4sk');

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
