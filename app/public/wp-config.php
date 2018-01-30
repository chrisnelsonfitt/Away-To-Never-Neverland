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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '/+vBcHe1xUSvabVIzjZyQRDTNUu9twK3FVzFC5bEtbuT7PiU3zIjXblZx+W9UHGvftEgfYAMFIn7Pab4r/hMoQ==');
define('SECURE_AUTH_KEY',  'VPVK0zmtmnTp6fZL4YHQ2iQ58I/uwWiFnFvqT03NrYYNr7tIEVsL6f1LUVfqPQ3TDyng6XfEIAyGuXxTgXv79w==');
define('LOGGED_IN_KEY',    'O0lXMxR+CUUycukRU5N4wVsrAz9Bq8Vd97Gq4/q5CZlMJ3U0dbUS7JmRglxwi4H8h++KoYju8D4HXI6z9pn4sg==');
define('NONCE_KEY',        'KE5pj+6JWQmdwgt21gDftMnUo86Cejwfa6DnAQyy8yJCuD5dZNLuNBUBncNdjEmOckCBkvnktHWraUOGxyGCDA==');
define('AUTH_SALT',        '8wz4V9KZf7nbm49mpyea17AtITnJKtE9N7pODc0Vee0vEM4+6nD7Pod6E+/BMNis0/UfJqSZmzBqCLqbp3Khfw==');
define('SECURE_AUTH_SALT', '+9Vez2nbhPbrOV3fUbZX0D3OFNyDiUiXGanLFSVkphSl4BJ9daEN3HVq8m0pnDi8or2Wd05RMh4273zcmEYL7A==');
define('LOGGED_IN_SALT',   'A8KEz3GD+acPD+WY30qMBVNAb9aQcBQstd11SYOJWfwI1+UTK/HPDqfl/gge1jyAv8H3yEXuis/TTmgd75P3uA==');
define('NONCE_SALT',       'uUjEPQ1NpBFc98PUC2xALBA/ZeHXL34WrLThZI0RaAYED3aFS1ZyPLUxR9r5hxHkhRGSoT0SQxgUjP/TJ1G1AA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
