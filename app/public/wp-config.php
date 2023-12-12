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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'i)TXwq> %-XtTu#G2=(B/[+91ftgtEftH Y.L*cHlDNFH>@{R*#pxlW1LAO1;`j7' );
define( 'SECURE_AUTH_KEY',   '7}jhXo<jy-4q66DP,bCoMhEj}6@U3RRdt0Av#D1fq>M|03Z:c{_huw7edA:SJK5p' );
define( 'LOGGED_IN_KEY',     '+G%?X%CDg~s/DG[H}NmPM>rfXJ^ysu^[Bf+0OP _vnibyJ)oIB=oq?GCgPNI]Ols' );
define( 'NONCE_KEY',         'FIL(6]OcDo={OC7s4 .L7uCva6{0{E<hy2lX3sV_/)~B<#(4U@uNaxC?<`KhUynl' );
define( 'AUTH_SALT',         '0u@])^q2TB<*rT!j-{&q-@^2(s=^rq<*,l&s2nj=t1tmet@Q,%+3rkCS&)(*4Ie|' );
define( 'SECURE_AUTH_SALT',  'O<}fNWdaIpu$s2mPt?3A!,Pj5Xf/gQ7}BmZ^AtcVFhkw$&HrZGUH*=c`cYka8-4k' );
define( 'LOGGED_IN_SALT',    'D1mo?0l.8;lYWayKFjMao9}O7benuQMWujxsA*)Z+ioJ.#L-J(mSHRiBNGU<1S[U' );
define( 'NONCE_SALT',        'jnc/3TcYXl$mcHk ~Vq52{#]e*gC5ocpnPGktV8LW ~vlRZZJl$;t+pF/QD%P7]-' );
define( 'WP_CACHE_KEY_SALT', 'O],G>Q?45X=+mi)Vuk7eAkP{Of.ul3JmBU!Y7LY. C!sFL2UZLP#o`K%##yYk6>3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
