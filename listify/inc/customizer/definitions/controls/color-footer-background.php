<?php
/**
 * Footer Background Color
 *
 * @uses $wp_customize
 * @since 1.5.0
 */
if ( ! defined( 'ABSPATH' ) || ! $wp_customize instanceof WP_Customize_Manager ) {
	exit; // Exit if accessed directly.
}

$wp_customize->add_setting(
	'color-footer-background',
	array(
		'default'           => listify_theme_color( 'color-footer-background' ),
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color-footer-background',
		array(
			'label'    => __( 'Footer Background Color', 'listify' ),
			'priority' => 50,
			'section'  => 'color-footer',
		)
	)
);
