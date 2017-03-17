<?php

/**
 * The plugin main file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              avee.com.np
 * @since             1.0.0
 * @package           Res_Int_Menu
 *
 * @wordpress-plugin
 * Plugin Name:       Responsive Interface Menu
 * Plugin URI:        avee.com.np
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Sushil Dhakal, Abhishek Rijal
 * Author URI:        avee.com.np
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       res-int-menu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//Define

define( 'RES_INT_BASE_PATH', dirname( __FILE__ ) );
define( 'RES_INT_FILE_PATH', __FILE__ );
define( 'RES_INT_FILE_URL', plugins_url( '', __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-res-int-menu-activator.php
 */
function activate_res_int_menu() {
	

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-res-int-menu-deactivator.php
 */
function deactivate_res_int_menu() {
	

}

register_activation_hook( __FILE__, 'activate_res_int_menu' );
register_deactivation_hook( __FILE__, 'deactivate_res_int_menu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-res-int-menu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_res_int_menu() {

	$plugin = new Res_Int_Menu();

}
run_res_int_menu();
