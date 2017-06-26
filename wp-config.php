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
define('DB_PASSWORD', 'gesundheititit');

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
define('AUTH_KEY',         '8)Wz3Mrzz.3Sa!ko@V+H*A1L.f%}DA[87C1*%{|v[,ejX)oDfknxYS=BS[LE{acd');
define('SECURE_AUTH_KEY',  'Axb3SGk}Z29$LH`)#]]/Y)LQAg5mlR1VZZMxL%#0EbO;FQj.3!Pmx#3KMt2WmKet');
define('LOGGED_IN_KEY',    'SJbPY}jx=`]f=4,1P7R.&^6lXAwqG]d*9v*fP5<kG+CXl!j{zn_fdWe !j,Ec]rh');
define('NONCE_KEY',        '+MJLSsnLR75]pE1=u>@zq}5HAQ+.O+w/nQLh/v2an}`q(!yP}HKb:bcS#8G4Wrg{');
define('AUTH_SALT',        '(|&5<O>LDLA-1w#,<unkAQ/1XIG]#<0A0t5LSQ}OBl72QWk-H2q0,O4ne^_5i/_<');
define('SECURE_AUTH_SALT', '& 4_+UOe#+>2<C/o_MDp~22-.VVtbhcEUSC_tkr9OQ*U/]F}J=@^I~Jy@DQ~6kmT');
define('LOGGED_IN_SALT',   ' Wy{(,:1vYwcMzR~@QtzGak8~?g!d$ea?8kE)|t`KzH>xF<tVtD^WswUd~4GZMe5');
define('NONCE_SALT',       '-hY su@z#:G]}L}bC%K.E  @F1~]}AGJyRE6w.PVCEYM-D~e=dwO*A.H%?qgQb8>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rl_';

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

