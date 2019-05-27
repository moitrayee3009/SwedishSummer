<?php 

/* adding css, fonts, icons and js*/

function ss_setup(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono&display=swap');
    wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.8.2/css/all.css');
    
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(),'1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ss_setup');


/* adding theme support */

function ss_init(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form','search-form',));
    add_theme_support('custom-background');
}

add_action('after_setup_theme', 'ss_init');

//add_theme_support('menus');
    // register_nav_menu('primary', 'Primary Header Navigation');
    // register_nav_menu('secondary', 'Footer Navigation');

    //add_theme_support('custom-header');
    
    // add_theme_support('post-formats',array('aside', 'image','video'));




/* Projects Post Type */

add_action('init' , 'custom_post_type');

function custom_post_type() {
    register_post_type('project',
        array(
            'rewrite'          => array('slug' => 'projects'),
            'labels'           => array(
                'name'         => ('Projects' ),
                'singular_name'=> ('Project' ),
                'add_new_item' => ('Add New Project' ),
                'edit_item'    => ('Edit Project' )
            ),

            'menu_icon'        => 'dashicons-clipboard',
            'public'           => true,
            'show_in_menu'     => true,
            'show_ui'          => true,
            'has_archive'      => true,
            'hierarchical'     => false,
            'show_in_admin_bar'=> true,
            'show_in_nav_menus'=> true,
            'supports'         => array('title', 'thumbnail', 'editor', 'excerpt', 'comments')
        )

    );
}

/* Register Sidebar */

function ss_widgets() {
    register_sidebar(
        array(
            'name'          => 'Main Sidebar',
            'id'            => 'main_sidebar',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>' 
        )
    );
}

add_action('widgets_init', 'ss_widgets');

/* Filters */

function search_filter($query) {

    if ($query->is_search()) {
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');




