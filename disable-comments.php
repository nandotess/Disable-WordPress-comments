<?php
/**
 * Disable WordPress comments
 *
 * @package  dwc
 *
 * Plugin Name: Disable WordPress comments
 * Plugin URI: https://github.com/nandotess/wp-plugin-disable-comments
 * Description: Disable WordPress comments.
 * Version: 1.0.0
 * Author: Fernando Tessmann
 * Author URI: https://fernandotessmann.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: dwc
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dwc_dir = dirname( __FILE__ );

require_once "{$dwc_dir}/class-disable-comments.php";
