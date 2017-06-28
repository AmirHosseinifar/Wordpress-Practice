<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package AmirPersonal
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses amirpersonal_header_style()
 */
function amirpersonal_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'amirpersonal_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 3457,
		'height'                 => 1135,
		'flex-height'            => true,
		'wp-head-callback'       => 'amirpersonal_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'amirpersonal_custom_header_setup' );

