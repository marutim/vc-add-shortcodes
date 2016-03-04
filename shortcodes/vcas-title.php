<?php
/**
 * File for creating Title Component
 *
 */

/**
 * Function for Adding Title Component on vc_init hook
 *
 * @param void
 *
 * @return void
 */
function vcas_component_title() {
	// Title
	vc_map(
		array(
			'name' => __( 'Title' ),
			'base' => 'vcas_title',
			'category'      => __( 'Test Shortcodes' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Title' ),
					'param_name' => 'title',
					'value' => __( 'This is the custom shortcode' ),
					'description' => __( 'Title' ),
				),
				array(
					'type' => 'colorpicker',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Title color' ),
					'param_name' => 'title_color',
					'value' => '#000000',
					'description' => __( 'Choose color for title text' ),
				),
			)
		)
	);
}
add_action( 'vc_before_init', 'vcas_component_title' );

/**
 * Function for displaying Title functionality
 *
 * @param array $atts    - the attributes of shortcode
 * @param string $content - the content between the shortcodes tags
 *
 * @return string $html - the HTML content for this shortcode.
 */
function vcas_title_function( $atts, $content ) {
	$atts = shortcode_atts(
		array(
			'title' => __( 'This is the custom shortcode' ),
			'title_color' => '#000000',
		), $atts, 'vcas_title'
	);

	$html = '<h1 class="component title ' . $atts['style']. '" style="color: ' . $atts['title_color'] . '">'. $atts['title'] . '</h1>';
	return $html;
}
add_shortcode( 'vcas_title', 'vcas_title_function' );
