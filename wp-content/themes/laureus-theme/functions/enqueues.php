<?php

function laureus_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/vendors/bootstrap.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('fancybox-css', get_template_directory_uri() . '/css/vendors/fancybox.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('fancybox-css');

	wp_register_style('reset-css', get_template_directory_uri() . '/css/reset.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('reset-css');

	wp_register_style('styles-css', get_template_directory_uri() . '/css/styles.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('styles-css');



	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress */

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/vendors/bootstrap.js', false, wp_register_script, true);
	wp_enqueue_script('bootstrap');

	wp_register_script('fancybox', get_template_directory_uri() . '/js/vendors/fancybox.js', false, wp_register_script, true);
	wp_enqueue_script('fancybox');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', false, wp_register_script, true);
	wp_enqueue_script('modernizr');

	wp_register_script('general', get_template_directory_uri() . '/js/general.js', false, wp_register_script, true);
	wp_enqueue_script('general');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'laureus_enqueues', 100);