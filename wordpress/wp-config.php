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
define('DB_NAME', 'wpone');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'jennyiscute33');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'A=7g^Ycx4u1j.c7OE&vBgeg,f_/n;i~>B|iGGuV~}R^>s|#)~lw(9+. kZ;}Ls=4');
define('SECURE_AUTH_KEY',  'pu19;@bi<C[4.G&Is<hXp:&C6ye03SwAN#ND&m[]n&EY`WwrLpVnfUoCSy]*xV4`');
define('LOGGED_IN_KEY',    'A.6Z|b3#h;c5eox>-dN&Sm=0(gx_5^N_AL8rixL4Q,>d,,()4|>NH%qIQ{EqZPF$');
define('NONCE_KEY',        '2$Jj 2)nXr.S*[{:?r^JZ0A1NZ:gV$Vp>VJFX,t%KIWNm?h+JyV|CSWn)Z|;}*|d');
define('AUTH_SALT',        '882VijTq o**L)|3IzHCVyv`k;N+4J=BBtJiEc`vtZWdONe0q-2ri]#_mKQ7e0-h');
define('SECURE_AUTH_SALT', '^vBa#T=K]iDR(GCh+%^5+G|FPv(md-x>k;5@+Mm&#JZQ=nQ6b}uq+^bw-}<3lg{S');
define('LOGGED_IN_SALT',   '|G+h-A:!z;-ya:?|F=.j@H7?|V7lmi-4#FEKd+p|9A6j+$iI$wc`<0Hs<.wgIU1$');
define('NONCE_SALT',       'yJ.{rz<VOv]}N7Gs#r/@;du,+@YD2KEGcVZSC?)2|^$Zf#`y|USA<P]+2U 4|u[u');


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
