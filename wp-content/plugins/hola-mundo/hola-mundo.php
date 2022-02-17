<?php
/**
 * Plugin Name:       Hola Mundo
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hola-mundo
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

function save_js_pero_en_php ( $block_attributes, $content ) {
	// $test_id = $block_attributes['test_id'];
	$test_data = /* get_post($test_id) */ [
		[
			'pregunta' => '¿Cuanto es 1+1?',
			'respuestas' => [
				'1',
				'2',
				'3',
			]
		],
		[
			'pregunta' => '¿De qué color es el cielo?',
			'respuestas' => [
				'azul',
				'negro',
				'amarillo',
			]
		]
	];

	ob_start();

	require __DIR__ . '/test.tpl.php';

	return ob_get_clean();
}


function create_block_hola_mundo_block_init() {
	register_block_type( __DIR__ . '/build', array(
        'api_version' => 2,
        // 'editor_script' => 'gutenberg-examples-dynamic',
        'render_callback' => 'save_js_pero_en_php'
    )  );
}

add_action( 'init', 'create_block_hola_mundo_block_init' );
