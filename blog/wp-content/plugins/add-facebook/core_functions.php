<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function load_smuzsf() {


	load_smuzsf_classes();

}

function load_smuzsf_classes() {


	smuzsf_admin( 'ui/ui.php' );

	smuzsf_public( 'classes/class-smuzsf-public.php' );

	$feed_public = new Smuzsf_Public();

	$feed_public->init();
	
	do_action( 'smuzsf_classes_loaded'  );
	
}

function smuzsf_smuzsf_loaded() {

	do_action( 'smuzsf_loaded' );

}

function smuzsf_admin( $file_name, $require = true ) {

	if ( $require )
		require SMUZSF_PLUGIN_ADMIN_DIRECTORY . $file_name;
	else
		include SMUZSF_PLUGIN_ADMIN_DIRECTORY . $file_name;

}

function smuzsf_public( $file_name, $require = true ) {

	if ( $require )
		require SMUZSF_PLUGIN_PUBLIC_DIRECTORY . $file_name;
	else
		include SMUZSF_PLUGIN_PUBLIC_DIRECTORY . $file_name;

}

function smuzsf_include_admin( $file_name, $require = true ) {

	if ( $require )
		require SMUZSF_PLUGIN_INCLUDE_ADMIN_DIRECTORY . $file_name;
	else
		include SMUZSF_PLUGIN_INCLUDE_ADMIN_DIRECTORY . $file_name;

}

function smuzsf_view_admin_path( $view_name, $is_php = true ) {

	$directory = SMUZSF_PLUGIN_ADMIN_DIRECTORY . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

	if ( strpos( $view_name, '.php' ) === FALSE && $is_php )
		return  $directory . $view_name . '.php';

	return $directory . $view_name;

}

function smuzsf_view_public_path( $view_name, $is_php = true ) {

	$directory = SMUZSF_PLUGIN_PUBLIC_DIRECTORY;

	if ( strpos( $view_name, '.php' ) === FALSE && $is_php )
		return  $directory . $view_name . '.php';

	return $directory . $view_name;

}

function smuzsf_public_image_url( $image_name ) {

	return plugins_url( 'publics/images/' . $image_name, SMUZSF_MAIN_FILE );

}

function smuzsf_image_admin_url( $image_name ) {

	return plugins_url( 'admin/images/' . $image_name, SMUZSF_MAIN_FILE );

}

function smuzsf_get_option( $feed_id, $option_name, $single = true ) {

	return get_post_meta( $feed_id, $option_name, $single );

}