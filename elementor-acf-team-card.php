<?php
/**
 * Plugin Name: Elementor ACF Team Card
 * Description: A team-member card widget for Elementor that pulls its content from Advanced Custom Fields on a custom post type.
 * Version: 0.1.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Marija Lekić
 * License: GPL-2.0-or-later
 * Text Domain: elementor-acf-team-card
 *
 * @package Elementor_ACF_Team_Card
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EATC_VERSION', '0.1.0' );
define( 'EATC_FILE', __FILE__ );
define( 'EATC_DIR', plugin_dir_path( __FILE__ ) );
define( 'EATC_URL', plugin_dir_url( __FILE__ ) );

/**
 * Show an admin notice and self-deactivate if Elementor or ACF is missing.
 * This prevents fatal errors if either dependency is disabled or uninstalled.
 */
function eatc_check_dependencies() {
	$missing = array();

	if ( ! did_action( 'elementor/loaded' ) ) {
		$missing[] = 'Elementor';
	}

	if ( ! class_exists( 'ACF' ) ) {
		$missing[] = 'Advanced Custom Fields';
	}

	if ( empty( $missing ) ) {
		return;
	}

	// Deactivate our plugin.
	deactivate_plugins( plugin_basename( __FILE__ ) );

	// Show a notice on the plugins screen.
	add_action(
		'admin_notices',
		function () use ( $missing ) {
			printf(
				'<div class="notice notice-error"><p><strong>Elementor ACF Team Card</strong> requires the following plugin(s) to be installed and active: %s</p></div>',
				esc_html( implode( ', ', $missing ) )
			);
		}
	);
}
add_action( 'plugins_loaded', 'eatc_check_dependencies' );

// Load included files.
require_once EATC_DIR . 'includes/post-type.php';
require_once EATC_DIR . 'includes/acf-fields.php';
require_once EATC_DIR . 'includes/elementor-integration.php';
require_once EATC_DIR . 'includes/enqueue.php';
