<?php
/**
 * The main Plugin Class
 *
 * @since 1.0.0
 *
 * @package Responsive_Int_Menu
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
* The Main plugin Class / Loads the core features for the plugin
*/
class Res_Int_Menu
{
	
	function __construct()
	{

		$this->plugin_name = 'res-int-menu';

		$this->version = '1.0.0';

		$this->load_dependencies();

		$this->set_locale();

		$this->define_admin_hooks();

		$this->define_public_hooks();

	}


	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Res_Int_Menu_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Res_Int_Menu_i18n();

		add_action( 'plugins_loaded', array ( $plugin_i18n, 'load_plugin_textdomain' ) );

	}
	

	/**
	 * [load_dependencies load plugin dependencies]
	 * @return [type] [load plugin dependencies]
	 *
	 * @access private
	 */
	private function load_dependencies(){

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-res-int-menu-i18n.php';

		/**
		 * The class responsible for saving all the settings defined,
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-res-int-menu-save-settings.php';

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		add_action( 'admin_menu', array ( $this, 'add_menu' ) );

		add_action( 'admin_enqueue_scripts', array ( $this, 'admin_enqueue_style_scripts' ) );

		$save_all_settings = new Res_Int_Menu_Save_Settings();

		add_action( 'admin_post_res_int_menu_settings_save', array( $save_all_settings, 'save_settings' ) );


	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		add_action( 'wp_enqueue_scripts', array ( $this, 'frontend_enqueue_style_scripts' ) );

	}
	/**
	 * [admin_enqueue_style_scripts loads Admin Styles / Scripts]
	 * @return [type] [loads Admin Styles / Scripts]
	 */
	public function admin_enqueue_style_scripts() {

		wp_enqueue_style( $this->plugin_name . '-admin-styles', RES_INT_FILE_URL .'/assets/css/admin/style.css', array(),'', 'all' );

		wp_enqueue_script( $this->plugin_name . '-admin-scripts', RES_INT_FILE_URL . '/assets/js/admin/script.js', array('jquery'),'', true );


	}

	/**
	 * [frontend_enqueue_style_scripts loads Admin Styles / Scripts]
	 * @return [type] [loads Admin Styles / Scripts]
	 */
	public function frontend_enqueue_style_scripts() {

		wp_enqueue_style( $this->plugin_name . '-frontend-styles', RES_INT_FILE_URL .'/assets/css/front-end/main.css', array(),'', 'all' );

		wp_enqueue_script( $this->plugin_name . '-frontend-scripts', RES_INT_FILE_URL .'/assets/js/front-end/main.js', array('jquery'),'', true );


	}

	/**
	 * [add_menu adds Admin Menu page]
	 *
	 * @since  1.0.0 [initial release]
	 *
	 * @access private
	 */
	public function add_menu() {
		//Add Menu page 
		 add_menu_page(
        __( 'Responsive Menu', 'textdomain' ),
        'Responsive Menu',
        'manage_options',
        'responsive-menu',
        array( $this, 'menu_page_callback' ),
        'dashicons-smiley',
        6
    );


	}

	public function menu_page_callback() {

		//Menu Page Settings.
		require RES_INT_BASE_PATH .'/includes/class-res-int-menu-settings.php';
		
	}
}