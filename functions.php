<?php

add_action( 'init', 'setup_bootstraptheme' );
function setup_bootstraptheme(){
  add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("http://code.jquery.com/jquery-1.8.3.min.js"), false, '1.8.3', true);
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 
    'bootstrap',
  	get_template_directory_uri() . '/js/bootstrap.min.js',
  	array( 'jquery' ),
  	'',
  	true 
  );
  wp_enqueue_script(
  	'custom',
  	get_template_directory_uri() . '/js/custom.js',
  	array( 'bootstrap' ),
  	'',
  	true
  );
}

?>