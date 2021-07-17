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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SportPusBedarrides' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JMN5RDdqvnPZuXWlDseWtIqR3UBh78uimgGfI7OxGXRJqumlZJ5CN5eer3VEhTEM' );
define( 'SECURE_AUTH_KEY',  '2pvy9RNVcpKW7hwLjaP8kh3tzGAX8goAg40GCIKp4AIRar24IPmP9PyDvn7kcGMS' );
define( 'LOGGED_IN_KEY',    'aXUdBQ7z6LMjkMwqMgBP1lie2BND0s0IXETXaEjdt7L43vsjEMdq9pzqlhb4Xy83' );
define( 'NONCE_KEY',        '0mBw5Bc0HQQGHcmYYlCHX3AIDP6pVCAeAOCFJTUpSPenOLvYUuOCzb9rY3bQhOw3' );
define( 'AUTH_SALT',        'pMiHTSSmwQ1uEAM7F6kJUy2h6EpVh7nt9SHxvEqynd39GmtyB21joPWZEwz2KHMN' );
define( 'SECURE_AUTH_SALT', 'XGpU0z0kDsTn6yt0nULZvFiktATUUPREAQsdcNLEZbQO0X8EV3h05r4LZKQJxyQr' );
define( 'LOGGED_IN_SALT',   'y4jxeqbQ72HkH9DqPM7cZO9ECTXNkNoLVn8MT8JAKrS8bDYW1BdbxwQRG5UGL54N' );
define( 'NONCE_SALT',       'FY69lAzcMKBmKrjkvyaSgQ98g9i1WJVZ4CJCEmOJtk6RXQFp2qq7l0iFHTGLHLtJ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
