<?php
/**
 * Elementor integration: registers our custom category and widget.
 *
 * @package Elementor_ACF_Team_Card
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add a custom category to Elementor's widget panel.
 *
 * Runs on elementor/elements/categories_registered.
 *
 * @param \Elementor\Elements_Manager $elements_manager Elementor's manager instance.
 */
function eatc_register_widget_category( $elements_manager ) {
	$elements_manager->add_category(
		'eatc-widgets',
		array(
			'title' => esc_html__( 'Team Card', 'elementor-acf-team-card' ),
			'icon'  => 'fa fa-plug',
		)
	);
}
add_action( 'elementor/elements/categories_registered', 'eatc_register_widget_category' );

/**
 * Register our widget class with Elementor.
 *
 * Runs on elementor/widgets/register.
 *
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor's widgets manager.
 */
function eatc_register_widgets( $widgets_manager ) {
	require_once EATC_DIR . 'includes/widgets/class-eatc-team-card-widget.php';

	$widgets_manager->register( new EATC_Team_Card_Widget() );
}
add_action( 'elementor/widgets/register', 'eatc_register_widgets' );
