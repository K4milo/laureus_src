<?php

function laureus_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/layoutcss/vendors/bootstrap.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('font-awesome-css', get_template_directory_uri() . '/layoutcss/vendors/font-awesome.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('font-awesome-css');

	wp_register_style('fancybox-css', get_template_directory_uri() . '/layoutcss/vendors/fancybox.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('fancybox-css');

	wp_register_style('reset-css', get_template_directory_uri() . '/layoutcss/reset.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('reset-css');

	wp_register_style('fonts-css', get_template_directory_uri() . '/layoutcss/fonts.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('fonts-css');

	wp_register_style('general-css', get_template_directory_uri() . '/layoutcss/general.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('general-css');

	wp_register_style('mq-css', get_template_directory_uri() . '/layoutcss/mq.css', false, APP_ASSETS_VERSION, null);
	wp_enqueue_style('mq-css');



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

	wp_register_script('map', get_template_directory_uri() . '/js/map.js', false, wp_register_script, true);
	wp_enqueue_script('map');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'laureus_enqueues', 100);