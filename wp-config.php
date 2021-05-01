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
define( 'DB_NAME', 'mesh16_wp292' );

/** MySQL database username */
define( 'DB_USER', 'mesh16_wp292' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b4fp1S]J(3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '7pbnkvin2nprmfjur1equveruxra1hfferkghlgsomo5ivizruzt9mpk0orved2u' );
define( 'SECURE_AUTH_KEY',  '1rtuzdkn84gvjlwmsaeshi0eqzzja58arcisc7jgwvd56huirlxdunmc24h9wglu' );
define( 'LOGGED_IN_KEY',    '8qp3hzw6265prsmg4mavshim1x1i2kratl9ywfaqfqohfjr9vak6gyix04fid2ho' );
define( 'NONCE_KEY',        'q03zdq2w5txcjocmlf1circn5qicnfargrziqa9amtljgim3amf6p2ptttgzne6p' );
define( 'AUTH_SALT',        'zs20ycourh5vpawemgu2anxkvleelehq6zrlccz8tco4neeg4guwegr61xkrgnnw' );
define( 'SECURE_AUTH_SALT', 'qm1wclatp06edk6qcp73qajyxkr4gbzb65sk67uqul3zx4x38wlviwnfp1muwecq' );
define( 'LOGGED_IN_SALT',   'k7trqjk7ksjd5ndtzwdybotgjofbdkfeiwv8camho0kchyhs5rtqxquwnkvxxmfz' );
define( 'NONCE_SALT',       'fe1yapxrablda7ge4iuocbstixzwkzv1rmmug9plagtpq5buccaot1kesdskdocf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwh_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('WP_HOME','http://206.189.45.97/~mesh16/');
define('WP_SITEURL','http://206.189.45.97/~mesh16/');