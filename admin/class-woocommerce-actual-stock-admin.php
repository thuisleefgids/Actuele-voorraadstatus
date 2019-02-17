<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.patrickhopman.nl
 * @since      1.0.0
 *
 * @package    Woocommerce_Actual_Stock
 * @subpackage Woocommerce_Actual_Stock/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woocommerce_Actual_Stock
 * @subpackage Woocommerce_Actual_Stock/admin
 * @author     Patrick Hopman <patrickhopman@me.com>
 */
class Woocommerce_Actual_Stock_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		if( function_exists('acf_add_options_page') ) {

			acf_add_options_page(array(
				'page_title' 	=> 'Theme General Settings',
				'menu_title'	=> 'Theme Settings',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'	=> 'edit_posts',
				'redirect'		=> false
			));

			acf_add_options_sub_page(array(
				'page_title' 	=> 'Theme Header Settings',
				'menu_title'	=> 'Header',
				'parent_slug'	=> 'theme-general-settings',
			));

			acf_add_options_sub_page(array(
				'page_title' 	=> 'Theme Footer Settings',
				'menu_title'	=> 'Footer',
				'parent_slug'	=> 'theme-general-settings',
			));

		}
		if( function_exists('acf_add_local_field_group') ):

			acf_add_local_field_group(array(
			'key' => 'group_5c667dbd176f4',
			'title' => 'Actuele voorraadstatus',
			'fields' => array(
			array(
			'key' => 'field_5c667dbe29d45',
			'label' => 'Leverancier',
			'name' => 'leverancier',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'collapsed' => 'field_5c667ee70a9d7',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Nieuwe leverancier',
			'sub_fields' => array(
			array(
			'key' => 'field_5c667ee70a9d7',
			'label' => 'Naam',
			'name' => 'naam',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			),
			array(
			'key' => 'field_5c667ef00a9d8',
			'label' => 'URL',
			'name' => 'url',
			'type' => 'url',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			),
			array(
			'key' => 'field_5c667efd0a9d9',
			'label' => 'API key',
			'name' => 'api_key',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			),
			array(
			'key' => 'field_5c667f160a9da',
			'label' => 'API secret',
			'name' => 'api_secret',
			'type' => 'password',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			),
			array(
			'key' => 'field_5c667f4b0a9dc',
			'label' => 'Frequentie (minuten)',
			'name' => 'frequentie_minuten',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 60,
			'step' => '',
			),
			array(
			'key' => 'field_5c667f210a9db',
			'label' => 'SKU Prefix',
			'name' => 'sku_prefix',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			),
			),
			),
			),
			'location' => array(
			array(
			array(
			'param' => 'page',
			'operator' => '==',
			'value' => '5272',
			),
			),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
			));

		endif;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woocommerce_Actual_Stock_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woocommerce_Actual_Stock_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/woocommerce-actual-stock-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woocommerce_Actual_Stock_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woocommerce_Actual_Stock_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/woocommerce-actual-stock-admin.js', array( 'jquery' ), $this->version, false );

	}

}
