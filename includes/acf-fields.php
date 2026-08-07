<?php
/**
 * Registers ACF field groups for Team Member post type.
 *
 * @package Elementor_ACF_Team_Card
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Team Member Details field group.
 *
 * Runs on acf/init so ACF's registration functions are available.
 */
function eatc_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_6a75e99d79593',
			'title'                 => 'Team Member Details',
			'fields'                => array(
				array(
					'key'          => 'field_6a75e99d667a9',
					'label'        => 'Role',
					'name'         => 'role',
					'type'         => 'text',
					'instructions' => 'Job title or role, e.g. Head of Engineering',
					'required'     => 1,
					'placeholder'  => 'Job title or role, e.g. Head of Engineering',
				),
				array(
					'key'          => 'field_6a75ebe0ea4ae',
					'label'        => 'Bio',
					'name'         => 'bio',
					'type'         => 'textarea',
					'instructions' => 'Short professional bio, 2-3 sentences',
					'rows'         => 4,
					'new_lines'    => 'wpautop',
					'placeholder'  => 'Short professional bio, 2-3 sentences',
				),
				array(
					'key'          => 'field_6a75ec42cdc96',
					'label'        => 'LinkedIn URL',
					'name'         => 'linkedin_url',
					'type'         => 'url',
					'instructions' => 'Full LinkedIn profile URL',
					'placeholder'  => 'Full LinkedIn profile URL',
				),
				array(
					'key'          => 'field_6a75ec8a30369',
					'label'        => 'Twitter URL',
					'name'         => 'twitter_url',
					'type'         => 'url',
					'instructions' => 'Full X/Twitter profile URL',
					'placeholder'  => 'Full X/Twitter profile URL',
				),
				array(
					'key'      => 'field_6a75ee011d48a',
					'label'    => 'Email',
					'name'     => 'email',
					'type'     => 'email',
					'required' => 1,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'eatc_team_member',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
		)
	);
}
add_action( 'acf/init', 'eatc_register_acf_fields' );
