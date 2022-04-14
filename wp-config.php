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
define( 'DB_NAME', 'mucjiso_news' );

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
define( 'AUTH_KEY',         'ica2&2VtxZ7Ol;MSGQefPc9QEe0T-HU&m5dIJZbB5`p(k_4f=C9s 45A!,F1CRhn' );
define( 'SECURE_AUTH_KEY',  'fSz (6SV~*l%*SS3<%.-ay:!$nm98(I;0[Tw.;DcK%z@c=/3-0{Am1f)66YKlvd$' );
define( 'LOGGED_IN_KEY',    'bK6P2.%iwy+5p#7K;wjd4%5br q-Lej!La>GiWtOJjalW_g}nM%+KLlSgH_Oogr`' );
define( 'NONCE_KEY',        ' J4aObV?>+eggV^)._o^K(bIQ5#pt+wEX}ekxfR/;AhEav!v:5xCg/xpfLVo87Wv' );
define( 'AUTH_SALT',        'DkiP7dvb5_MKf*`5/EN^AdnsNVF/_}1+,;z-D ^TeEg.[V3;$fPT-q,W{OzZIH05' );
define( 'SECURE_AUTH_SALT', '}u&7Tqy[~D?4<sdJb}7V+ ~yMYFo@s`NnjQA}*Mp%r:%,6/u9$k)#=nZ+}D+xw@;' );
define( 'LOGGED_IN_SALT',   'FYU|+/m#%X,ZWeNS>WW#DTFy-C9@)}In1niW`ntY_KPP2[yaokx{{_:qHm$Au16D' );
define( 'NONCE_SALT',       'oPX.e--l^B{5bVDu@/yZGUl@~!cD:p6WHN1W(T<3u&n}DocuvO~R2!H(en7&%)6Q' );

/**#@-*/

/**
 * WordPress database table prefix.
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
