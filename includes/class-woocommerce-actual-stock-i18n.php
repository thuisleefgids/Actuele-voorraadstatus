<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.patrickhopman.nl
 * @since      1.0.0
 *
 * @package    Woocommerce_Actual_Stock
 * @subpackage Woocommerce_Actual_Stock/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Actual_Stock
 * @subpackage Woocommerce_Actual_Stock/includes
 * @author     Patrick Hopman <patrickhopman@me.com>
 */
class Woocommerce_Actual_Stock_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-actual-stock',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
