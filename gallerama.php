<?php
/**
 * Plugin Name: Gallerama
 * Plugin URI:  http://wordpress.org/plugins
 * Description: The ultimate WordPress Gallery plugin.
 * Version:     0.1.0
 * Author:      Mickey Kay
 * Author URI:  http://mickeykay.me
 * License:     GPLv2+
 * Text Domain: gallerama
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2014 Mickey Kay (email : mickeyskay@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using grunt-wp-plugin
 * Copyright (c) 2013 10up, LLC
 * https://github.com/10up/grunt-wp-plugin
 */

// Useful global constants
define( 'GALLERAMA_VERSION', '0.1.0' );
define( 'GALLERAMA_URL',     plugin_dir_url( __FILE__ ) );
define( 'GALLERAMA_PATH',    dirname( __FILE__ ) . '/' );

// Includes
require_once( GALLERAMA_PATH . 'includes/post-type-gallery.php' );

/**
 * Default initialization for the plugin:
 * - Registers the default textdomain.
 */
function gallerama_init() {
	$locale = apply_filters( 'plugin_locale', get_locale(), 'gallerama' );
	load_textdomain( 'gallerama', WP_LANG_DIR . '/gallerama/gallerama-' . $locale . '.mo' );
	load_plugin_textdomain( 'gallerama', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

/**
 * Activate the plugin
 */
function gallerama_activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
	gallerama_init();

	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'gallerama_activate' );

/**
 * Deactivate the plugin
 * Uninstall routines should be in uninstall.php
 */
function gallerama_deactivate() {

}
register_deactivation_hook( __FILE__, 'gallerama_deactivate' );

// Wireup actions
add_action( 'init', 'gallerama_init' );

// Wireup filters

// Wireup shortcodes
