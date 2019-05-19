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
define( 'DB_NAME', 'cc_local2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!6Q^v,K/,[fR;~-P`vBu39`]#}n7|~%yQbuB+:d:2nXkdCF%XI`KolD:/c*0ng=/' );
define( 'SECURE_AUTH_KEY',  '!+TfbG71q8Z0[K|A$:md**p$lA_x+!n9z]<j-)Y.bGR8xifIT4aMS!#x9Tsz<)5?' );
define( 'LOGGED_IN_KEY',    '-gW|vRNQt1BJAeVkIq-3e7dpV~B!,3=X#^OQmM<ndu.q_V4:;oC|#nYr*C/h@6Ss' );
define( 'NONCE_KEY',        'b{T!0{p|FKrg<twS^I:CkF4?1j]I*B_L oL pA$HhuBVk?7kus2{W,!drk<ELfSi' );
define( 'AUTH_SALT',        't,*(&gc4IjF-nuyr$ZhQKVX-MQKa:;^_XhE&cLH)BPV,7zoVrjms|}]$b lcV&},' );
define( 'SECURE_AUTH_SALT', 'K!1&0DwEKD(#{3<zj7MWFxH7xZKsKm]JSfM8q7/Af{=J,gq5%,S g&3N6f]PP*}Y' );
define( 'LOGGED_IN_SALT',   '89;GNp;icK:DjZ6&Jl4?EP= pc<2;I Kx:?7Hh|%cRlS4p,;I#4|g~%tWF604Pl?' );
define( 'NONCE_SALT',       'f!!wf0+[rUpvFRN{%J< 8Sa@:C;/O9P2SUvE4U%%Mw92u_W:+f{x$(qXLtLX I_v' );

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
