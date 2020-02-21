<?php

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    
}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main' => 'Main Menu'
    ));
}

add_action('after_setup_theme', 'inhabitant_features');
remove_action('shutdown', 'wp_ob_end_flush_all', 1); //added 

function inhabitent_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar Info',
        'id' => 'sidebar-info',
        'description' => 'Add a text block with your business hours, contact info, etc',
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-hours">',
        'after_title' => '</h2>'

    ));
}

add_action('widgets_init', 'inhabitent_widgets');

add_action( 'wp_enqueue_scripts', 'crunchify_enqueue_fontawesome' );
function crunchify_enqueue_fontawesome() {
        wp_enqueue_style('font-awesome', 'https://cdn.crunchify.com/wp-content/icon/font-awesome/css/font-awesome.min.css');
}

?>