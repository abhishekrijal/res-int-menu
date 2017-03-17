<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       avee.com.np
 * @since      1.0.0
 *
 * @package    Res_Int_Menu
 * @subpackage Res_Int_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Res_Int_Menu
 * @subpackage Res_Int_Menu/includes
 * @author     Sushil Dhakal, Abhishek Rijal <xqluzxwise@gmail.com>
 */
class Res_Int_Menu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'res-int-menu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
