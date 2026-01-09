<?php
/**
 * Admin class.
 *
 * @package review-follow-up-for-wooCommerce\admin\
 * @author Store Boost Kit <storeboostkit@gmail.com>
 * @version 1.0
 */

namespace STOBOKIT;

defined( 'ABSPATH' ) || exit;

$args = array(
	'file'      => REVIFOUP_PLUGIN_FILE,
	'slug'      => 'review-follow-up-for-wooCommerce',
	'version'   => REVIFOUP_VERSION,
	'license'   => get_option( 'review-follow-up-for-wooCommerce_license_key', '' ),
	'item_name' => 'Review Follow Up for WooCommerce',
	'item_id'   => 105,
);

new Update_Handler( $args );
