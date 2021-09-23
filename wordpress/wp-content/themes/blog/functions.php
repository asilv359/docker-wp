<?php


add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','script_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'wpb_init_widgets' );




// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails',array('post') ); 
    add_image_size( 'img-fluid', 400, 250, true );

}


function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
}



function script_theme(){

}

function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => ' <div class="widget">',
        'after_widget'  => ' </div>',
        // 'before_widget' => ' <h2>',
        // 'after_widget'  => ' </h2>',


    ));
}