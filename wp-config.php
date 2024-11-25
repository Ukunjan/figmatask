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
define( 'DB_NAME', 'figmatask' );

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
define( 'AUTH_KEY',         'M3Rk]C<VJ8+9YI,tmlmQHV=`<2rBn?ckwuXuk/^+h-#AQd~FS D4[<]vf!9fv}_#' );
define( 'SECURE_AUTH_KEY',  'M;Jd|[*NR<mdYw0HHj~GmmE^4~>_9q=nXOvjX}=8bN0y +,u|puf7=IKc+})_Qr7' );
define( 'LOGGED_IN_KEY',    'ke3^=56MlNkLH1N(k:`hh40[u)8&|l{$rZ~D]B}>df.@2U|/ZfY=!3KLJlRC<O ;' );
define( 'NONCE_KEY',        ')o,nc3cux#!`{S-qa3PZ-<kFv@@qwQZ:XkT6]N;:EaAJ4U1u/Rd_|LQ8<p{$Y[Hu' );
define( 'AUTH_SALT',        'H )3y`4spy}z25_7S,}*2{CW>Sq/d7:-xRpIxSnt=6LW??Ksh=(AZ(sHjlhFrHiG' );
define( 'SECURE_AUTH_SALT', 'y3. qQw{eI957Z 5L]%`9?v/~[6,cjX&!!y2#rqNzqP=Wh]Oyt=W0`8LfE58H;S2' );
define( 'LOGGED_IN_SALT',   'uAg%KQ?;?nrKlGM[i*_!JrB&3In&fbbOw[<QIheg:_w3R:H}+01 a$a;uB)q /ZY' );
define( 'NONCE_SALT',       'B}mup65&KXUqIf@>.Rg=hb~*r0>r$|J>;p$!;k>J8A~Wj2Gd{xQdVP~28vS u/pE' );

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
