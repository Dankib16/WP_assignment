<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'WP_DEBUG', true ); 
define( 'WP_DEBUG_LOG', true ); 
define( 'WP_DEBUG_DISPLAY', false );
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*o*:E4-vq|T}I(c)Y,NnnTRN>%xKHK??$]kvU.n=Cn,Y@EqoajA0$OYOJxM71LIs' );
define( 'SECURE_AUTH_KEY',  ':a>:n DEo^WaZXT1+$pnpLQXrtkhgC<O!7irE@?Vo%-/-Z r}?<V.qoE;aHFN, m' );
define( 'LOGGED_IN_KEY',    'U$~MJg~,f|RSmJx5x,IWc.,7dI2h~ymP5:7B}*QE03sGml&=]($<xWFy%9c &<v=' );
define( 'NONCE_KEY',        '5s0?v{937j_r~Bl:i ;?D;K-?hX,}lXBM Pfi} .jNug|Y-cc?AAn;y#8A}vm,Vc' );
define( 'AUTH_SALT',        'x7{u#*C<UN7p;An* pCw(s3wy&:@?as`5{j^0i)1jJeXJWZcF|_KGA$H0?R!6$q6' );
define( 'SECURE_AUTH_SALT', '+Dl3XNF02)D[ILTv.FBo4CS>kH@3:8`J{xb3L48Az=@m>zR}UQ.eHmX?Cdu`<<WE' );
define( 'LOGGED_IN_SALT',   'A+64_ JJ%J*FsEXK!N2q$QIsd*/p_{ysUVH<rtz1/KW{>YBp)eI|D*jcqvpx8}FH' );
define( 'NONCE_SALT',       'f6*m]Ln*aTFI4`kzF*K=q=hpat3!K$*.LjS|,Y4rp&1;dt{Ba*PwlB>+=/nYYi_9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
