<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpma_' );

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
define( 'AUTH_KEY',         '4khw*rj=5zlC|:nKv,Q/Z_J8x~FBK-;rBJeb%,t/X,9E<vBQ]w>j&/8_K)|)0,@}' );
define( 'SECURE_AUTH_KEY',  'T8JgCt;mC^1@KiJ-P{C|8Kj]Q)rQ<!i+7&=0xb3p#Z:u|IMA1[=I/hB}E:3$(C}#' );
define( 'LOGGED_IN_KEY',    '=`9M@_t+HaE#plmwW`z{ #-{/Hz6C0f49j)6:Fp|j4 S=?r4jPcZT+c&R+%u,V(~' );
define( 'NONCE_KEY',        'LhW9)*+2=PRx~kH`a]%ZBKQ(Lw4^A|*eoCM@oglAQhgGL*G6.u25Ni*#0}igST;[' );
define( 'AUTH_SALT',        'XW=6(ZkC5[=x?Es3)$3}rT6(|Q}+$`e)nEi@MH1[~/zl{dBdz!<L16^Sg]?G/i]U' );
define( 'SECURE_AUTH_SALT', 'GKc`%]j<2>7~[[Ej#72l NRm~}zPEs(c$M FID%O@CIaC^BQU+ooLG:FY7*Vnlp}' );
define( 'LOGGED_IN_SALT',   '#=b;FX_G|L!+A4OO1|rHY<#%H~Z8.]R.zmCj:0E_$TU.HBig. LTQ3+rA=Bv:;mY' );
define( 'NONCE_SALT',       'LsM&e7fjyBh^>P~f<EY`zBFSEt-1vN#Dj4s~^_]LDj2&b68-d./Wb)[Oa3%D>t#@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ma_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
