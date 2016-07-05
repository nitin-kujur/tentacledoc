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
define('DB_NAME', 'sql6125723');

/** MySQL database username */
define('DB_USER', 'sql6125723');

/** MySQL database password */
define('DB_PASSWORD', 'bnRNGlMgtE');

/** MySQL hostname */
define('DB_HOST', 'sql6.freemysqlhosting.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost:8080/tentacle_doc');
define('WP_SITEURL','http://localhost:8080/tentacle_doc');
define('WP_MEMORY_LIMIT', '64M');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oI[Qv< apmXR)MPFBD#_/zQ&aB/&!%sXb:2QVf1,;k<I7FT5P&(=P?P`*^70>AUL');
define('SECURE_AUTH_KEY',  '2jg!Shie^>.JfWL(zVB#KgMNOr4StuM$X#f7&x8QsA5(0vE#mH]<7xLXqfi!?Vgy');
define('LOGGED_IN_KEY',    'mxEPy/7E-!O~(yws%@k`^IU[VBx5PSWJl&:0PK.cBjNQR;}&/;@vD*X#C]1CinMT');
define('NONCE_KEY',        'SaonB{vQAzeC#xz7sC+.}^xbxyEX[Q=$A;8k{Za->[i8GJQZf}VRpivn7Y&+A~s/');
define('AUTH_SALT',        'Z}PgsqK3654Yo4c&ithVq*]{^^kXvn.fl :)V|~yqbvJf1.%`d!`Y*-bNtl#@N,5');
define('SECURE_AUTH_SALT', '0O.7b3Y#ZH=Q>9)TXO!N?D8#g1A-KS7q(cB4?s9%qBq^yImd`G7v@?h73H,%IRw%');
define('LOGGED_IN_SALT',   'gI)H#TJ+TvW4eHq#Lk&Mha{Cq*@/bkX} jae.[b!2Rry`^{M@SJ{65$F|_Yu^fgn');
define('NONCE_SALT',       '^:A/7Np}^d6fJ=iu%[c]0n9JJ_^!BZ@jM,`<J*Qm*6-A<-X>.&~^]BE/MY~e5K`7');

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
