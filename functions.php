<?php 
/**
 * Functions
 *
 * @package bootIV-theme
 * @author Marlotamo
*/
if ( ! function_exists( '_bootIV_theme_setup' ) ) : 

    function _bootIV_theme_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enables post thumbnail
         */
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-header' );

        add_theme_support( 'woocommerce' );

        /*
         * Common Navigation Location
         */
        register_nav_menus( array(
            'header-navigation' => __( 'Header Navigation' ),
            'footer-navigation' => __( 'Footer Navigation' ),
            'sidebar-navigation' => __( 'Sidebar Navigation' )
        ));

        /*
         * Sidebar Widgets
         */
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    

    }
endif; 
add_action( 'after_setup_theme', '_bootIV_theme_setup' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

function enqueue_scripts_and_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_register_style( 'bootIV-wp-theme-css', get_template_directory_uri() . '/assets/css/themestyle.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'bootIV-wp-theme-css');

    wp_register_style( 'boot4-wp-theme', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'boot4-wp-theme' );
    
    wp_register_script( 'vendor', get_template_directory_uri() . '/assets/js/plugin.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'vendor' );
    wp_register_script( 'bootIV-wp-theme-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'bootIV-wp-theme-jquery' );

    wp_register_script( 'bootIV-wp-theme-jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.1.1.slim.min.js', null, 1.0, true);
    wp_enqueue_script( 'bootIV-wp-theme-jquery-slim' );
   
    wp_register_script( 'bootIV-wp-theme-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, 1.0, true );
    wp_enqueue_script( 'bootIV-wp-theme-js' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

$defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => false,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/functions/wp_bootstrap_navwalker.php';