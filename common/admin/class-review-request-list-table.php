<?php
/**
 * Table holds all the notify details.
 *
 * @package review-follow-up-for-wooCommerce\admin\
 * @author Store Boost Kit <storeboostkit@gmail.com>
 * @version 1.0
 */

namespace REVIFOUP;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * Table holds all the notify details.
 */
class Review_Request_List_Table extends \STOBOKIT\List_Table {
	/**
	 * Constructor.
	 *
	 * @param array $args Arguements.
	 */
	public function __construct( $args = array() ) {
		parent::__construct( $args );

		add_filter( 'revifoup_review_requests_table_columns', array( $this, 'custom_columns' ) );
		add_filter( 'revifoup_review_requests_table_sortable_columns', array( $this, 'sortable_columns' ) );
	}

	/**
	 * Custom columns.
	 *
	 * @return array
	 */
	public function custom_columns() {
		return array(
			'cb'         => '<input type="checkbox" />',
			'id'         => esc_html__( 'Order ID', 'review-follow-up-for-wooCommerce' ),
			'email'      => esc_html__( 'Email', 'review-follow-up-for-wooCommerce' ),
			'status'     => esc_html__( 'Status', 'review-follow-up-for-wooCommerce' ),
			'created_at' => esc_html__( 'Created At', 'review-follow-up-for-wooCommerce' ),
			'sent_at'    => esc_html__( 'Sent At', 'review-follow-up-for-wooCommerce' ),
		);
	}

	/**
	 * Sortable columns.
	 *
	 * @return array
	 */
	public function sortable_columns() {
		return array(
			'id'         => array( 'id', true ),
			'email'      => array( 'email', false ),
			'status'     => array( 'status', false ),
			'created_at' => array( 'created_at', false ),
		);
	}

	/**
	 * Email column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_email( $item ) {
		return isset( $item['email'] ) ? $item['email'] : '';
	}

	/**
	 * Status column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_status( $item ) {
		return $item['status'] ? $item['status'] : '-';
	}

	/**
	 * Created at column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_created_at( $item ) {
		return $item['created_at'];
	}

	/**
	 * Sent at column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_sent_at( $item ) {
		return $item['sent_at'];
	}
}
