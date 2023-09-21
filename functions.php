<?php

function load_css(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js(){

    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// THEME OPTIONS
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    ) 
    );


// =========================================================================
// CHANGE EXCERPT LENGTH
// =========================================================================
function my_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'my_excerpt_length');


//REGISTER WIDGETS

// REGISTER BLOG SIDEBAR

function register_blog_sidebar() {

    register_sidebar(
        array(
            'id'            => 'blog-sidebar',
            'name'          => 'Blog Sidebar',
            'description'   => 'This widget area discription',  
            'before_widget' => '<section class="blog-sidebar-area">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )

    );
  }

add_action( 'widgets_init', 'register_blog_sidebar' );

// REGISTER LEFT AND RIGHT SIDEBAR

function register_all_sidebars() {

    register_sidebar(    
        array(
            'id'            => 'left-sidebar',
            'name'          => 'Left Sidebar',
            'description'   => 'This widget area discription',  
            'before_widget' => '<section class="left-sidebar-widget-container">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

  }

add_action( 'widgets_init', 'register_all_sidebars' );

// REGISTER FOOTER AREAS

function register_footer_widget_areas() {

    register_sidebar( 
        array(
            'id'            => 'footer_area_left',
            'name'          => 'Footer Area Left',
            'description'   => 'This widget area discription',
            'before_widget' => '<section class="footer-area footer-area-left">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar( 
        array(
            'id'            => 'footer_area_center',
            'name'          => 'Footer Area Center',
            'description'   => 'This widget area discription',
            'before_widget' => '<section class="footer-area footer-area-center">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar( 
        array(
            'id'            => 'footer_area_right',
            'name'          => 'Footer Area Right',
            'description'   => 'This widget area discription',
            'before_widget' => '<section class="footer-area footer-area-right">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar( 
        array(
            'id'            => 'footer_area_bottom',
            'name'          => 'Footer Area Bottom',
            'description'   => 'This widget area discription',
            'before_widget' => '<section class="footer-area-bottom">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );
  }

add_action( 'widgets_init', 'register_footer_widget_areas' );