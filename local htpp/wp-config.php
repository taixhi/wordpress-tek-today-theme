<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'tkato');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '4/x-3M)9X_C3-*{r.-22xrr0rx3wqYy:MoR.kP*pVL[!M%g1;G%4$K!1U`J|e[!Z');
define('SECURE_AUTH_KEY',  'qyf-{#dgWC!%_1rFx@{w#<<?8K$m9| !%=.Eeo-% +vzAm$90RvJFjH}#{LSQT]t');
define('LOGGED_IN_KEY',    ' &eWOroD<t+yjT[moMLCaVEX1C#%FNtfxe##*()G3R.hxI2IB&CXB[s|W>9B-0}~');
define('NONCE_KEY',        'M3Pk)g8R*KX:%ta4j*,#dYy-*|oNqgv23Gus;r>+Z:QkL?-Dr0O7{`,y5Y+_|h13');
define('AUTH_SALT',        'k|I%Qk52%Atm-+j`3-VNn0nvJ*bw@/UPDZxm}qoh*%k2,*yoJ8(=:-B/:,:Q>`}-');
define('SECURE_AUTH_SALT', '|Nn&|<RSK-12o/%WnwJ]-+rVJ,Yh=Q::pn-Y{2CGL<JpD) 8<s Y{cs+)eI~*,_w');
define('LOGGED_IN_SALT',   '2$vx_ 1Z1^NftA$F,Nq*O40qiJ],B4C+h-82eOcH[=^d9K$]0+?|U+_FP|e$.^IQ');
define('NONCE_SALT',       'Mk`R0z<3^+/)MO6C,|ER=`#wQ#VH2}+k?+Unmh1};-E|m_ (_lrO2b@p-gbmR@O{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
