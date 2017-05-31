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
define('DB_NAME', 'sxexception');

/** MySQL database username */
define('DB_USER', 'thegreatmanel1');

/** MySQL database password */
define('DB_PASSWORD', '14121996');

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
define('AUTH_KEY',         '|s.{wQlA$2T&Dp4vrghp8ku:n,!i:`wsa{rxx,&})AYZUer~V5UjvyWX)T.>tQkD');
define('SECURE_AUTH_KEY',  '+]IC`WH]8@?j^tiw!Z&RppBi,d.G7H?Er;IpNex}Fh%M!SZHaBF.O]oq8APh(2XG');
define('LOGGED_IN_KEY',    '5Xs,Db4(Ro@R.Q(hU)i[]8Qq |9jfv1ji:&=Cy?X:Iet|ge` j7?.W]>=_GL|.VS');
define('NONCE_KEY',        'w.dL4;IA:#wqu1Iw@=v_pc@{jyU5f=rYvfO@M>D]HV;]|]v4kQf526lcYub3/V1O');
define('AUTH_SALT',        '3{J[mCL`4O*Td(~=J*MZG?~!sZ+F{B<(yg>cvR8|IVi)C`) P848{GW<X2=C9Rs-');
define('SECURE_AUTH_SALT', '015c?KD(QvZ%jo#GuJh?trN,#h065U#}+wJ.n34dcT5V:jTC_dCmcpV?NlJJEWoj');
define('LOGGED_IN_SALT',   'H@o$6?}Tdz,]{+J6#VRE_E!@j1NJG:q$>M_Xy(b/Ys[[wSpo38ebC]riF?GbJ3,o');
define('NONCE_SALT',       '.0E})$dO5^i,oSP[Oxh-K/>}x|E*bNbn9m]9x1O.cI$bx3Fg>a ;`sy8U3V/zf3z');

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
