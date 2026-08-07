<?php
/**
 * Registers the widget's CSS and JS files.
 *
 * These are registered (not enqueued) so Elementor can pull them in
 * on-demand via the widget's get_style_depends() and get_script_depends()
 * methods. This means the CSS only loads on pages that actually use the widget.
 *
 * @package Elementor_ACF_Team_Card
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register CSS and JS assets. Elementor enqueues them when the widget renders.
 */
function eatc_register_assets() {
	wp_register_style(
		'eatc-team-card',
		EATC_URL . 'assets/team-card.css',
		array(),
		EATC_VERSION
	);

	wp_register_script(
		'eatc-team-card',
		EATC_URL . 'assets/team-card.js',
		array(),
		EATC_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'eatc_register_assets' );

// Also register in the editor so Elementor's preview iframe can load them.
add_action( 'elementor/editor/before_enqueue_scripts', 'eatc_register_assets' );
