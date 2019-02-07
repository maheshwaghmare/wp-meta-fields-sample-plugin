# Sample Plugin for WP Meta Fields

Example plugin to show the how to integrate `WP Meta Fields` framework for adding meta box in easy way into plugin. You can use this framework into you `theme` too.

Framewok URL: https://github.com/maheshwaghmare/wp-meta-fields

```
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

// Add meta field framework.
// 
// @todo Make sure you have the latest version `wp-meta-fields`.
// 		 Get the latest version from https://github.com/maheshwaghmare/wp-meta-fields
require 'inc/wp-meta-fields/wp-meta-fields.php';

// Register meta box for `Post` with single `text` field with unique meta key `prefix-1-text`.
mf_add_meta_box( array(
	'id'       => 'example-meta-box',
	'title'    => __( 'Example Meta Box' ),
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
```
