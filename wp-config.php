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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'sysdba');

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
define('AUTH_KEY',         '&`e6O;^INi-@o(hgk^RK1SU_ Jq=^(4}cN1T{mgY.SVc?4<fH;^;6ph(`XE5?%aq');
define('SECURE_AUTH_KEY',  '7BDl7q2$HvfQpiU@IVT&}iwXgmc/}=q*pC2~-fdlyj@GIcH[nkK}>OX_XJi,aM_X');
define('LOGGED_IN_KEY',    'Iif~sED142}^mSd>)5!Z}+Hg+Q/ @kgt1ayKR41s=7gNyUIWew3fn/A+|kTFJLL ');
define('NONCE_KEY',        'XdBKA3nEQE8J<r@uoB0LTkmU[35Ft5.nD_D}A,&/gJ%HLz64J.*8x+|ieve|d1K ');
define('AUTH_SALT',        '(|oD!}hTtZ,x&?!Ok+4Y!A>!MppL-XUt*D(cI;WFXc/3NlQux3`44J=ip6}^E(F%');
define('SECURE_AUTH_SALT', '$8C>8qGa@NYW#{MGpJphKnt(F4,^S;_Isdpnpz=fES-t%D*uU#OQR/-{0Z^S&-p/');
define('LOGGED_IN_SALT',   'n%k~T72Qq4(qlq/^AEX`16Zwe|mo`p?ZDjXaw,`+-giNm]!}scM8Xr]X2x5bc5!d');
define('NONCE_SALT',       '#=aP}t?h-@ls:LmQm%.vl?lv(+rh}h[N-@fdK.U~/XeNqMI}#Unc9 ?i9&uA@Kp{');

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
