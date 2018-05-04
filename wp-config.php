<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'gaztelekua');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WxO^3j5!?}.sgmO9OSZELVOb~#L%H3Dz5G;^0%Vr9**+b^.[Ff`V4JnbVV0x~[xk');
define('SECURE_AUTH_KEY', 'hV[eHKpx ;%A(Aacx/z_2,J22V5-#E_3x`HA2j e<Ngj*]^Qt,;dwv!xWV97e_f$');
define('LOGGED_IN_KEY', '&_#U)zj3^Es,j0$xm7u>Gx Ddhurs_jx~#D:`SF3xM: |dS1mVYy1^oI@kf%Aduw');
define('NONCE_KEY', '2Z+]X>)ZoiK12f1a}&>M.>zS$inAxNhT>.vB}%*OLk_/ rz7_t>8b<flw?]WaVdf');
define('AUTH_SALT', '&Ih1V|zmaNJkr6WMVE2ReXqT;V!eAdC]wMRCD7}CaMArIG!2:nO_QUe}NZC+&[^w');
define('SECURE_AUTH_SALT', 'E(nub3Y/WDd}`%,Xz 44rhx29GZ+NZi7x.d;z^:WSA=Rw,aq5u5zU0_n!Wme{FI.');
define('LOGGED_IN_SALT', 'G) >c#1T$pDQBV;hI*>ke<cR;pvR[]_an6nqhQX=pG 7 ;-DA}0{|%FXUQ 4]A`N');
define('NONCE_SALT', '1]~jX29]?r@/w3];W]hzwqQKIL8[:C*R#;+QpyF&b<`CYL(JC2*kb0(plJ#ZcBg`');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

