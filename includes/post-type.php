<?php
/**
 * Registers the "Team Member" custom post type.
 *
 * @package Elementor_ACF_Team_Card
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Team Member custom post type.
 */
function eatc_register_team_member_cpt() {
	$labels = array(
		'name'               => _x( 'Team Members', 'post type general name', 'elementor-acf-team-card' ),
		'singular_name'      => _x( 'Team Member', 'post type singular name', 'elementor-acf-team-card' ),
		'menu_name'          => _x( 'Team Members', 'admin menu', 'elementor-acf-team-card' ),
		'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'elementor-acf-team-card' ),
		'add_new'            => _x( 'Add New', 'team member', 'elementor-acf-team-card' ),
		'add_new_item'       => __( 'Add New Team Member', 'elementor-acf-team-card' ),
		'new_item'           => __( 'New Team Member', 'elementor-acf-team-card' ),
		'edit_item'          => __( 'Edit Team Member', 'elementor-acf-team-card' ),
		'view_item'          => __( 'View Team Member', 'elementor-acf-team-card' ),
		'all_items'          => __( 'All Team Members', 'elementor-acf-team-card' ),
		'search_items'       => __( 'Search Team Members', 'elementor-acf-team-card' ),
		'not_found'          => __( 'No team members found.', 'elementor-acf-team-card' ),
		'not_found_in_trash' => __( 'No team members found in Trash.', 'elementor-acf-team-card' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'menu_icon'          => 'dashicons-groups',
		'menu_position'      => 25,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'has_archive'        => false,
		'supports'           => array( 'title', 'thumbnail' ),
		'rewrite'            => array( 'slug' => 'team-member' ),
	);

	register_post_type( 'eatc_team_member', $args );
}
add_action( 'init', 'eatc_register_team_member_cpt' );
