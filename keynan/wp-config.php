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
define('DB_NAME', 'thomasleds607');

/** MySQL database username */
define('DB_USER', 'thomasleds607');

/** MySQL database password */
define('DB_PASSWORD', 'FmOprx57');

/** MySQL hostname */
define('DB_HOST', 'thomasleds607.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4AmHChVHqR/qp4tZ9VnalqXyZaFEys8Vr/gy2HDmMoiFm7IuSvGgbliG/IBT');
define('SECURE_AUTH_KEY',  'dkNXiMOpA++VGsVxuY3Fo9p8YT1HapFUOsU6DLYRD2UGteAgBf+o+irRelrb');
define('LOGGED_IN_KEY',    'ByzQIrswB4owq1oXp+kV1K92aaRK5TG71YemAy+D6DBdKkoZm0gP6P5shVmN');
define('NONCE_KEY',        'zxZF1TxFJzhFbvTZDpUE/F1iTBFmxYo/3fJo7KxRWL5+QovE3B1Y2usT7d1G');
define('AUTH_SALT',        '7DLMlSLdChMBMintKTCezQ2y/7IqRHWh58b6LoAxZcYcce54kKAocVM/uJrx');
define('SECURE_AUTH_SALT', '9oziroBeIJcMtU/Aj4Eygk4RkJOMxCOPaYzQOaiWcccaTGBNq4ITztPsvOT6');
define('LOGGED_IN_SALT',   '2z2jujLFGSOGCAhHnXZAZ1AEX7Lktgce7ukh+o+RwmGtjxbnLZAVHyuPeLuo');
define('NONCE_SALT',       'gPbE8saBepmUNkwOcwMGRZIyDxA15V8S+dKfp7w7+xqisCLWi8UQZgKkZAHc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor4663_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
