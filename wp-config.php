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
define('DB_NAME', 'cloudbase');

/** MySQL database username */
define('DB_USER', 'cloudbase');

/** MySQL database password */
define('DB_PASSWORD', 'tortola');

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
define('AUTH_KEY',         '#vHb]phA_8PFzBFPIf9&tS65QS5@GY&R*Cs|;Db.Zrbczs0O8y14PTeoeXx<@?p=');
define('SECURE_AUTH_KEY',  'kRyID.}zr<;{}mR^VqQ4-75n6M0I~{cA4z%OSZ5V>hWZ4F<nRe>*}o<LB:z4@Lu:');
define('LOGGED_IN_KEY',    '|v3FNf>0;Qaq9[f|q]%9uuyqi5P2dKhm>]!/8papI,b2-yA{bl%ryb}gI~E%-c*K');
define('NONCE_KEY',        'q2/A,VeF[dk!Iq{aI[@LS/#~T@n4=vZq`kBq54wtq?v4!F6 *~.TBm/]*x;k[>+=');
define('AUTH_SALT',        ']*#,Ktf!=Q~y5zQ*ALrq@K,W]Ntah0zB=klU)<I<;t:nE!}J]*.mD/dwc<SsrEYT');
define('SECURE_AUTH_SALT', ' y1UM&CMhk8&/Gw^[$?Dkd5]5k9<w=TF?H9OOH[%V)Z+fpP-$3p*HU~LO)&_&/<N');
define('LOGGED_IN_SALT',   'd-Z8?  S-ZEYBRF-hx2eNR8v3-ovBqZJVzoUS@mK3E62|P}io7(Bwmw+3nQ@xtb!');
define('NONCE_SALT',       '&taZIW2w{c-a#H6RsY)KQIlbOO1_(Ju&mf~MdWU_R5zA~M5c9[U1>]X/hML9?AnZ');

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
