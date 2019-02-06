<?php
/**
 * Plugin Name: WP Meta Fields Sample Plugin
 * Plugin URI: https://maheshwaghmare.wordpress.com/
 * Description: Sample plugin for `WP Meta Fields` integration.
 * Version: 1.0.0
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.wordpress.com/
 * Text Domain: WP Meta Fields
 *
 * @package WP Meta Fields
 */

require 'inc/wp-meta-fields/wp-meta-fields.php';

mf_add_meta_box( array(
	'id'       => 'example-all-fields',
	'title'    => __( 'Example - All Fields' ),
	'screen'   => array( 'post' ),
	'context'  => 'normal',
	'priority' => 'default',
	'fields'   => array(
		'prefix-1-text' => array(
			'type'        => 'text',
			'title'       => __( 'Text Field', 'textdomain' ),
			'description' => __( 'Simple text field for demonstration purpose.', 'textdomain' ),
			'hint'        => __( 'This is the Text Field for storing the text data for demonstration purpose.', 'textdomain' ),
			'default'     => '',
		),
	)
));

// To retrieve/print the value of field `prefix-1-text` use:
// 
// 1. [mf meta_key='prefix-1-text']
// 
// or
// 
// 2. mf_meta( 'prefix-1-text' );
// 
// or
// 
// 3. echo mf_get_meta( 'prefix-1-text' );
// 

// Other Ready Examples.
// require 'inc/wp-meta-fields/example-screen-normal.php';
// require 'inc/wp-meta-fields/example-screen-side.php';
// require 'inc/wp-meta-fields/example-screen-advanced.php';