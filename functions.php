<?php
/**
 * Include the BoldGrid Theme Framework
 */
locate_template( '/inc/boldgrid-theme-framework-config/config.php', true, true );
require_once get_template_directory() . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';

add_theme_support( 'starter-content', array(
	'posts' => array(
		'home' => array(
			'post_content' =>
				file_get_contents( locate_template( 'sample/layout1.html' ) ) .
				file_get_contents( locate_template( 'sample/layout2.html' ) ) .
				file_get_contents( locate_template( 'sample/layout3.html' ) )
		),
		'about' => array(
			'post_content' =>
				file_get_contents( locate_template( 'sample/layout4.html' ) ) .
				file_get_contents( locate_template( 'sample/layout5.html' ) ) .
				file_get_contents( locate_template( 'sample/layout6.html' ) )
		),
		'contact' => array(
			'post_content' =>
				file_get_contents( locate_template( 'sample/layout7.html' ) ) .
				file_get_contents( locate_template( 'sample/layout8.html' ) ) .
				file_get_contents( locate_template( 'sample/layout9.html' ) )
		),
	),
	'widgets' => array(
		'boldgrid-widget-1' => array(
			'text_about'
		),
		'boldgrid-widget-3' => array(
			'text_business_info',
		),
	),
	'options' => array(
		'blogname' => 'Changed your Site Title',
		'blogdescription' => 'Dynamic tagline',
		'show_on_front' => 'page',
		'page_on_front' => '{{home}}',
	),
	'theme_mods' => array(
		'custom_theme_css' => file_get_contents( locate_template( 'sample/sample.css' ) ),
		'logo_font_family' => 'Orbitron',
		'logo_font_size' => '42',
		'heading_font_family' => 'Original Surfer',
	),
	'nav_menus' => array(
		'primary' => array(
			'name' => __( 'Top Menu' ),
			'items' => array(
				'page_home',
				'page_about',
				'page_contact',
				'page_custom',
			),
		),
		'social' => array(
			'name' => __( 'Social Menu Samples' ),
			'items' => array(
				'link_yelp',
				'link_facebook',
				'link_twitter',
				'link_instagram',
				'link_email'
			),
		),
		'footer_center' => array(
			'name' => __( 'Social Menu Samples 2' ),
			'items' => array(
				'link_yelp',
				'link_facebook',
				'link_twitter',
				'link_instagram',
				'link_email'
			),
		)
	),
) );

function filter_content ( $content ) {
	var_dump( $content );die;
}

//add_filter( 'get_theme_starter_content', 'filter_content' );
?>
