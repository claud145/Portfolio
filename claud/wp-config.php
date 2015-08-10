<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'klaudiocvs_portafolio');

/** MySQL database username */
define('DB_USER', 'klaud_claudio');

/** MySQL database password */
define('DB_PASSWORD', 'claud1456');

/** MySQL hostname */
define('DB_HOST', '184.168.92.125');

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
define('AUTH_KEY',         'e8IS|9haEYT%&+`*)Sgte+% E3:q#/%6M[c6}2|/K6g9@|GV{[=HQ[3zuOE6;FxQ');
define('SECURE_AUTH_KEY',  'j(d1&+.x[+xt}|0yU4|+oJ1pgEy1lEK|5QGYk|Z:syPLf]-Q3,5@c4y`|6k%uqt{');
define('LOGGED_IN_KEY',    'Or9IU+evS!RV<eDY8~W7>W>uofvR~M1F?Vu-14Wa%#z(cYMZ_Na5pT[~tSqs_sP ');
define('NONCE_KEY',        'aG.:4E p |n8F|6x/M^mHj-Cj-rf5]O:}p,P2q+$*@yqxF7Hs~fkKDzlIcTnm@9_');
define('AUTH_SALT',        '<~x94322#z3o.9-L69D/>ouq>K|HIQu[kD]:i0DV8)7+M|>q$qRIb!k}qA%ia<Iq');
define('SECURE_AUTH_SALT', 'Wq[7+B601?eG;w5Owg4`NN=T{SR&jn8?fhaG@Ld~+Zmkw]?At<>@;1ulNtWq4Hzn');
define('LOGGED_IN_SALT',   '[SlN=|TM-:s-oBA6DY|]UWm2pv{Pei*J%#GL7m7g75_UUrfK(B~0Fu/kp!0|ff_X');
define('NONCE_SALT',       'aHm9Cf?q/(SkOi3;m#Up9Z,=EK+)gNDNSuh.E#OyDxDQv?_ Q`0!._|XXvfu.OoP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
