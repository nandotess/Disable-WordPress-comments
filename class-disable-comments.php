<?php
/**
 * Disable WordPress comments
 *
 * @author   Fernando Tessmann
 * @since    1.0.0
 * @package  dwc
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'DisableComments' ) ) :

	/**
	 * Disable WordPress comments Class
	 *
	 * @class    DisableComments
	 * @since    1.0.0
	 * @package  dwc
	 */
	class DisableComments {

		/**
		 * Setup class
		 *
		 * @since  1.0.0
		 */
		public function __construct() {
			// ## Actions ##

			// Removes from admin menu.
			add_action( 'admin_menu', array( $this, 'remove_admin_menu' ) );

			// Removes from post and pages.
			add_action( 'init', array( $this, 'remove_comment_support' ), 100 );

			// Removes from admin bar.
			add_action( 'wp_before_admin_bar_render', array( $this, 'remove_admin_bar_menu' ) );
		}

		/**
		 * Removes from admin menu
		 *
		 * @since  1.0.0
		 */
		public function remove_admin_menu() {
			remove_menu_page( 'edit-comments.php' );
		}

		/**
		 * Removes from post and pages
		 *
		 * @since  1.0.0
		 */
		public function remove_comment_support() {
			remove_post_type_support( 'post', 'comments' );
			remove_post_type_support( 'page', 'comments' );
		}

		/**
		 * Removes from admin bar
		 *
		 * @since  1.0.0
		 */
		public function remove_admin_bar_menu() {
			global $wp_admin_bar;
			$wp_admin_bar->remove_menu( 'comments' );
		}

	}

endif;

return new DisableComments();
