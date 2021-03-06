<?php 

function wf_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    add_theme_support( 'menus' ); 
    register_nav_menus( array(  
        'primary' => __( 'Primary Menu', 'webfusion_construction' ) 
        ) ); 
}
add_action('after_setup_theme', 'wf_theme_support');

// Load External and Internal CSS and Fonts (FontAwesome)
function wf_theme_styles() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.7.0/css/all.css' );
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wf_theme_styles');

// Load JS Scripts 
function wf_enqueue_scripts() {
    wp_enqueue_script( 'products_js', get_template_directory_uri() . '/js/products.js', array('jquery'), '', true  );
    wp_enqueue_script( 'counter_js', get_template_directory_uri() . '/js/counter.js', array('jquery'), '', true  );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true  );
}
add_action( 'wp_enqueue_scripts', 'wf_enqueue_scripts' );

function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'sidebar');

