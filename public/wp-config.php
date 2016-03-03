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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-(Sex>hYq;P/*i*>WM{$]cL[VfSI3V,&Prk;|%p(wqRe/dK$o@Jl8YZa{,4?j:Ju');
define('SECURE_AUTH_KEY',  '1S^1j-mxbZ=G4tVe<p/-U|4Z/8!<[2eS8zCLzrvl$7ujCoO=ByV:A!vpj.8?hhE+');
define('LOGGED_IN_KEY',    '%H!a;3UEpFoSAcZn&5c*YjH[+dytp__r-yIb&~M@IV{-<9|4iX-&iw6:f+Z&$IZ2');
define('NONCE_KEY',        'bV47YoBY^4b-:teoR}MibsGs.H`?TmHYT3Pv9((lH@m:42nO2bz.k-kAON&@k6])');
define('AUTH_SALT',        'M1NR+@h3C ^7%pf@cz/|@G.sL0{|{vxfC+6A^UQ&hc9Qb],OfT[dr>:H:@5iN=V@');
define('SECURE_AUTH_SALT', '9VY;L?2ov/K:Hcmfh;a`{:2?t$=.tR/K1.m8HI4:B&A?W@wWy+l Gd+=Q+;c;/*+');
define('LOGGED_IN_SALT',   'TO*?FWUNG!Po$I_zyp6_Q92)A3IVQnhY9spNSl>lnM+}&h+rkZ]Fz_(T6h62~dN>');
define('NONCE_SALT',       'J>|)_(Zg>uNclG&G|/+j hiXunv&Pfbxt)|{R22OS>2jai,`EzG4{qvj;n-;g<yh');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
