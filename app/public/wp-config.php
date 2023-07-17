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


define('AUTH_KEY',         'xknGliVxH+BZQ/eSDNo70JeFklU46xxqbt1KWKHOkeVDhVVdnDx4Bs/eNYTvBcyQmQ63ADc3bBQKblwC9P+S7g==');
define('SECURE_AUTH_KEY',  'QcANFXDe9cSz5OOG4NJCyDa6LqvenxZ0Eu0RK5falazrdZbwQIdBy88tdQsYpngNT3vdgL4P+I15AbVVZ0JDew==');
define('LOGGED_IN_KEY',    'ZAU2UBWAGAjwPl2lXtXe6otyPzVTkBnJ7vMFAymlrluCKFeZOunI0SL+YeiX+vB0agqpBh+2MkhnRJafdty7TQ==');
define('NONCE_KEY',        'KQ2nzLRblShpzY99xzYyRDEgirfQuU+XVE5/YctGhjgFmFJyOsSHrb4L4bzXyun1GFQbOARCR3mWVdlkjMFqcw==');
define('AUTH_SALT',        'zSvTWbyzJN1FEeFFZ3l7PbfzUact0z5dsrWlYonRJ4u3qZjPl+byQOcdXDFDT8jsTaPEggSMRYaMIbYw0z8Tqw==');
define('SECURE_AUTH_SALT', 'gxeev8HvfFtRHJje/OgFdO84sUtJN4BH02miAIaAmdhSVGAadMq7iUwTM8WhR4ZVzf5DPa61PI4jXqZL9LWWgQ==');
define('LOGGED_IN_SALT',   'w3Fuqx3yw4EogGzl9JT5LDpK49j01xZ5/VQEU5NQpoBP5DHUYdF6gbPIa8CMdpkCc9E/ndtrD2QL3AXvf2y+TQ==');
define('NONCE_SALT',       'ScEdxClegRq3CvNri77CEVTD7knebeX1OxH2l//tYDmFE2j8cppImboTXg3lPdypOq0vJXRobV4Np8cOFsHi8A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
