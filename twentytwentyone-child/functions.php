<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One_Child
 * @since Twenty Twenty-One 1.0
 */

function child_enqueue_styles() {
    // Dequeue the parent theme's stylesheet
    wp_dequeue_style( 'twenty-twenty-one-style' );

    // Enqueue the child theme's stylesheet
    wp_enqueue_style( 'wp-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 );
