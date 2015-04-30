<?php

function styleSheetInclude_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'styleSheetInclude_resources');


function hyperion_theme1_child_scripts(){
   wp_enqueue_script( 'main js', get_template_directory_uri() . '/main.js' ); 
}

add_action( 'wp_enqueue_scripts', 'hyperion_theme1_child_scripts' );

// Bootstrap & jQuery

function enqueue_my_scripts() {

wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
};

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');


function enqueue_my_styles() {
wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
};
add_action('wp_enqueue_scripts', 'enqueue_my_styles');


// Normalizecss

function my_cdn_upload_url() {
    return 'http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css/hyperion/wp-content/uploads';
};


add_filter( 'pre_option_upload_url_path', 'my_cdn_upload_url' );


// // Add featured image supprt
function hyperion_setup(){
    add_theme_support('post-thumbnails');
};


add_action('after_setup_theme', 'hyperion_setup')

?>
