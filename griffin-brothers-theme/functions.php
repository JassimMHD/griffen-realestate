<?php
/**
 * Griffin Brothers Properties Theme Functions
 *
 * @package GriffinBrothers
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Setup Theme Supports
 */
function griffin_brothers_setup() {
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Custom Logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    // Register Primary Navigation Menu
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Navigation Menu', 'griffin-brothers' ),
        'footer-menu'  => esc_html__( 'Footer Quick Links', 'griffin-brothers' ),
    ) );
}
add_action( 'after_setup_theme', 'griffin_brothers_setup' );

/**
 * Enqueue Theme Scripts and Styles
 */
function griffin_brothers_scripts() {
    // Google Fonts
    wp_enqueue_style( 
        'griffin-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', 
        array(), 
        null 
    );

    // Main Theme Stylesheet
    wp_enqueue_style( 
        'griffin-main-style', 
        get_stylesheet_uri(), 
        array(), 
        '1.0.0' 
    );

    // Main Theme JavaScript
    wp_enqueue_script( 
        'griffin-main-script', 
        get_template_directory_uri() . '/assets/script.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'griffin_brothers_scripts' );

/**
 * Helper to get asset URL
 */
function griffin_asset( $path ) {
    return esc_url( get_template_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}
