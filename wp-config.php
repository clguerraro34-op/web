<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_estudios' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']y%z$m94wWQT*:HfQ*9_B0=b5M^2octtT?)EKJ{zLRz.e<9:aqDk+f1ur|Mb#U]L' );
define( 'SECURE_AUTH_KEY',  '[h)Pq*{?mv8u`J45j3)sDx&DQJf31P6wYyeR@~ZeLQ]&HD7_ax+_Sh.?Gzo+tDo3' );
define( 'LOGGED_IN_KEY',    'rk.g@9a7)8;m;rXC_4i#8A1eHd6N4>XLo,xw#O{n_cpb$J_M|I?DmpN/ @RZj(EA' );
define( 'NONCE_KEY',        '}>NBB(8,9~-{NIh~{-6m,B3JZQYaE}(k^#]E1Z[($:0:D@^?|!wu]fC>99-rc#+3' );
define( 'AUTH_SALT',        '[$*YB^.KG{]e_j#PgKx@sFe]v30yhSNONg=6S2q!!=;WgM[|.cIK,r30YC+%FuzM' );
define( 'SECURE_AUTH_SALT', 'EBn$>W.:R tKamtz1/Do=s][X%OngkjSXK+_ddK|dJBjg9%~3`i};CP^!Jy6T1Zs' );
define( 'LOGGED_IN_SALT',   '`@<KX~!D9LX,#%BG<72[7&SMT*v;Z 7{f6W3b4GyPi%?#fj16/t&7##BPO9X.zDy' );
define( 'NONCE_SALT',       '[(|~[p){Vn;#LPRE9L!)%Dhf L1blnm7dpJs8{4]5eqGTSAF65IMJCWnBI$B.Im]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
