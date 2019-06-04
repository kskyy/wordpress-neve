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
define( 'DB_NAME', 'pro_neve' );

/** MySQL database username */
define( 'DB_USER', 'pro_neve' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q39TiSdGH' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'chKrr#W&K|Y1B0To#dd-H pTtThTd.`f>LxVF>Fqd,^37`y:D?[Wz,0MM_BezE6/' );
define( 'SECURE_AUTH_KEY',  'pXDsg]a3@@UKUq_($oay1 L#RLnrDS{g`[:e;$>j7sH!N4FRY*D+qJo?j3BfFCyF' );
define( 'LOGGED_IN_KEY',    '9eDlen?axr@uy3limUid46N8yF9H)l1TQ#^Wx5LD){bM?c}%uq2p%ejM-Xe|*wE$' );
define( 'NONCE_KEY',        'IbP(*xW3e5U!1G+t(YV$)dW`TsBoFeNBZ(o{J}UcMweRD-WaUG1(T0.];g},Keyn' );
define( 'AUTH_SALT',        'nKN:&I+A>Btb~ nwc-e9.M<U#OC|yg^9&+`y{$Wg3Q2!6TnT=#}cW6x @(+>N)&P' );
define( 'SECURE_AUTH_SALT', 'I#D5FEH&w.6V{(,{&nyeguyUOm#v6p-C8)UoaYzZ_~3T1Yhy;W7PVzsD1kc`VJUn' );
define( 'LOGGED_IN_SALT',   '(XksD-Sx0XDlfwZdV1O`8)8SYMHp0gYX*[y;<0-|R{k[% t*,,8JJAwgc7:yUKv`' );
define( 'NONCE_SALT',       'K_xCHoQrP&E1<|/fRkV!{}:dQyB4`}53S2]dik$i/S_2VoSsVURvl0~)O0pto0(o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
