<?php
/**
 * Plugin Name: Review Follow Up for WooCommerce
 * Requires Plugins: woocommerce
 * Plugin URI: https://storeboostkit.com/product/review-follow-up-for-wooCommerce/
 * Description: Automatically send follow-up emails to collect customer reviews in your WooCommerce store.
 * Version: 1.1.0
 * Author: Store Boost Kit
 * Author URI: https://storeboostkit.com/
 * Text Domain: review-follow-up-for-wooCommerce
 * Domain Path: /languages/
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * Tested up to: 6.9
 * WC requires at least: 9.6
 * WC tested up to: 10.4.3
 *
 * @package review-follow-up-for-wooCommerce
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'REVIFOUP_PLUGIN_FILE' ) ) {
	define( 'REVIFOUP_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'REVIFOUP_VERSION' ) ) {
	define( 'REVIFOUP_VERSION', '1.1.0' );
}

if ( ! defined( 'REVIFOUP_PATH' ) ) {
	define( 'REVIFOUP_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'REVIFOUP_URL' ) ) {
	define( 'REVIFOUP_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! class_exists( '\REVIFOUP\REVIFOUP' ) ) {
	require_once __DIR__ . '/includes/class-revifoup.php';

	/**
	 * Returns the main instance of REVIFOUP.
	 *
	 * @since  1.0
	 * @return REVIFOUP
	 */
	function revifoup() {
		return \REVIFOUP\REVIFOUP::instance();
	}

	// Global for backwards compatibility.
	$GLOBALS['revifoup'] = revifoup();

	require_once dirname( REVIFOUP_PLUGIN_FILE ) . '/install.php';

	register_activation_hook( REVIFOUP_PLUGIN_FILE, array( 'REVIFOUP\Install', 'init' ) );
}
