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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'team2' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HZ3j1dEH' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '>SyB jN+1l&%9^iuo*%V:%~;v6PB/{l)Ti,<}mef~2cZ}+j9%tz(&_vY0KlFsiH8' );
define( 'SECURE_AUTH_KEY',   'AfoVYh*Bj%<PJPR)h`2`X&&e:.tv&-!JeKBypxrgt]ae%!mhP^#XOs4=OqQb$k1r' );
define( 'LOGGED_IN_KEY',     'L>2(W9nYgJUWXG7p9AdfwP,E+N`B,1nev72b_7T^ c{E)Z8iQD3$qJ3!=v~N:2Z{' );
define( 'NONCE_KEY',         'Mnll[<>dK%W9/Jvw8|F2CEg% 0fOdYwc)VJ !V1eM~FC.uu5ESAY.Rm2}{KiNE5K' );
define( 'AUTH_SALT',         'T?:3?V(jKd0k _GARyu^UV=K#V]fRklT<ITOBDGA8?s&n.4Si`bnK~pu1(-2Fq(A' );
define( 'SECURE_AUTH_SALT',  '*3w-8>t_kd[A</gAr._S?otz^`:Ql|UB#`3}pqJCp$i@<7!q2OYF0%P~#s^K0|^.' );
define( 'LOGGED_IN_SALT',    'n$KI36y#Q< vdm{+Zn!&%7rHwe?)p3@rV{|rzNA|C)|=Cxy|WhQq`E2pTO9KbBb/' );
define( 'NONCE_SALT',        'Yja{lC0O..DN2]6hJQRHd7O4iXUD(UC=O,DC!54Pg,:;`gF<jT*LNyZ,s}fxiIR(' );
define( 'WP_CACHE_KEY_SALT', '$)9+vT;r[9>z<~Gr/5xnW lTPqmJ7wfM+/|#E[T^@=vtcui6MVo!@,3,+ pXD,~Z' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
