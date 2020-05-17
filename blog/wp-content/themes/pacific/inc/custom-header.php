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
 * @package Pacific
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses pacific_header_style()
 */
function pacific_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'pacific_custom_header_args', array(
		'default-image'			=> get_parent_theme_file_uri( '/assets/images/header.jpg' ),
		'default-text-color'    => '000000',
		'width'                 => 1600,
		'height'                => 1600,
		'flex-height' 			=> true,
		'video'              	=> true,
		'wp-head-callback'      => 'pacific_header_style',
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default Header Image', 'pacific' ),
		),
	) );

}
add_action( 'after_setup_theme', 'pacific_custom_header_setup' );

if ( ! function_exists( 'pacific_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see pacific_custom_header_setup().
 */
function pacific_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

/**
 * Customize video play/pause button in the custom header.
 *
 * @param array $settings Video settings.
 */
function pacific_video_controls( $settings ) {
	$settings['l10n']['play'] = '<span class="screen-reader-text">' . __( 'Play background video', 'pacific' ) . '</span>' . pacific_get_svg( array( 'icon' => 'play' ) );
	$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'pacific' ) . '</span>' . pacific_get_svg( array( 'icon' => 'pause' ) );
	return $settings;
}
add_filter( 'header_video_settings', 'pacific_video_controls' );
