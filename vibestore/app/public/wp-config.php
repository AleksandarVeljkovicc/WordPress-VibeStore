<?php
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',          'scSf[1X[ZjaLP]^#;:DGvL$WNSffL,z8{1XOpaDt5#F./| O7Vg`W+S29%]TrpwS' );
define( 'SECURE_AUTH_KEY',   'G7UA0d<p%aql-%uDi:odRQA^wh9(.cGp!VChe+AI)=# +Ey@Bg/XmUFeAz|_XdX7' );
define( 'LOGGED_IN_KEY',     '^umdPw-59qp:$A-$}6*<*]F&3kL.N!kthn-}(@`;7>S $9H_SPkK?k[]H{(}riF3' );
define( 'NONCE_KEY',         'w;ak)xX/cy^LBY}$^tK7>YC-}5V|%QX;nq9od?~SWCeB*+<=doU(r;IhfjvYW%^4' );
define( 'AUTH_SALT',         '*&bJn)F}N:LIcFxOIu<&zTE6%bLPub$EE@GPu9FUX&mVo?jr]v4n!|XSutXimdAz' );
define( 'SECURE_AUTH_SALT',  '(!3Tp3 u{%f*o430Ff $BUsZHtllg.(qcy}(Y;IPJj8p1`7!JEgJr,KN|dnEdca-' );
define( 'LOGGED_IN_SALT',    '3b+GzHl,KHA_Qg-((INh8RG9.oMy*,9rL(@6L ~e8!jU>O^Ao@{~,II@ieBX>-O{' );
define( 'NONCE_SALT',        '(54Kv,:<u>o96=HM04[O:Yo[Q`O*@/YCb<GZ HO$/q<Ht6}>J8fY8&;w|O}DssaI' );
define( 'WP_CACHE_KEY_SALT', '}Z#kt<~p-rGno)3E_1S7f3TbEG|pMSW,;N_UuF2BfMGON$8dl+!FAZboq-P;U,K0' );


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
