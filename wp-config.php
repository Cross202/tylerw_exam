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
define('DB_NAME', 'twexam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'FmO${!=w/tRr8MN*unGBvj 79:[7b7Wt;jq*o<dFb,Fjnq^A>%Z1sRRD*P~1mH#2');
define('SECURE_AUTH_KEY',  'J1nD[04d|@x+;%_8xiv+% zylZhn%zL0+d}xG|/-Cn#<4.kF)GAYOG0CXCL*!0}Z');
define('LOGGED_IN_KEY',    'xK{7J,[-2`Hto,MS-Nj5VyPlm81prf8UV;*34u`Jc@$7Z44-p *Srgj=clSWCZ1l');
define('NONCE_KEY',        'LG>9/uuyeJMi!k+@{MVxT+/=vT1 y!SB@VF[NRtGj5?HF?@E4~/j@11wq%E;^Jl:');
define('AUTH_SALT',        '|~AKjO8m%Y}&DHg(<uzUw[s)e}z?`g[;X;cNQF0Wf[4G5:HEoq qse}p;uA1Qr=W');
define('SECURE_AUTH_SALT', 'TY(&4*r0rPO%Y*%?l%e]$NL2#}$-z&Wi)hj@O$99qj5?7yOm@^9L%n0R8i,?06;B');
define('LOGGED_IN_SALT',   'oAIS8LB&nPrQ@S.~J/TP.!NF+fs;,w:Sh5F>aI_rWpQ*{><<yL}dT-mLjz(!UapP');
define('NONCE_SALT',       '7 yW!oLChB8YNjZZ7LDt,J>qKl#-@0,K6XMtI e~S5N~F2{@VMXnHY.S*&&+qBXf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
