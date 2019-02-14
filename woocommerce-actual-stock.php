<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.patrickhopman.nl
 * @since             1.0.0
 * @package           Woocommerce_Actual_Stock
 *
 * @wordpress-plugin
 * Plugin Name:       Actuele voorraadstatus
 * Plugin URI:        https://www.thuisleefgids.nl
 * Description:       Plugin om API's van
 * Version:           1.0.0
 * Author:            Patrick Hopman
 * Author URI:        https://www.patrickhopman.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-actual-stock
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-actual-stock-activator.php
 */
function activate_woocommerce_actual_stock() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-actual-stock-activator.php';
	Woocommerce_Actual_Stock_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-actual-stock-deactivator.php
 */
function deactivate_woocommerce_actual_stock() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-actual-stock-deactivator.php';
	Woocommerce_Actual_Stock_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_actual_stock' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_actual_stock' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-actual-stock.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_actual_stock() {

	$plugin = new Woocommerce_Actual_Stock();
	$plugin->run();

}
run_woocommerce_actual_stock();
