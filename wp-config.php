<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chrisyu1_WPXQ6');

/** Database username */
define('DB_USER', 'chrisyu1_WPXQ6');

/** Database password */
define('DB_PASSWORD', '&K.ZqA^j9Fc]EL/R@');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '66c2630c91d844abd6a4ef63af3857ed9dbd698f4ec4227fb6732d1850230045');
define('SECURE_AUTH_KEY', 'be5fbf61f0ee29af46ed19c9f6fe260e6988b31cdbf2a84c06950968cb162429');
define('LOGGED_IN_KEY', '4e56a7f3d689be5ced4154d57d5c2a9abde69ce9a55556a53623d2c29e812806');
define('NONCE_KEY', 'b924cc04d25dbd9c077da47463210c5b882ff33727a4debbbd8178ef609a41ba');
define('AUTH_SALT', 'cfb6996afe83679e261dacd12d5734e48f7becf812004239c951cffed6375ec2');
define('SECURE_AUTH_SALT', 'fac5e72f5bd8fa95bf0b5f5409d27822fe4e73abb28c8ee870649dbb1f9947cd');
define('LOGGED_IN_SALT', '53d19b373f41f20e2ce9c8d21ef2ab15c28e3a48f7265662262271674924ab2f');
define('NONCE_SALT', '5df144977041a66083d848131d4623bc557fbf85826bc299d66a037905d14bdb');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'YTU_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
