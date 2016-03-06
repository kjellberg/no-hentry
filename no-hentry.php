<?php
namespace YoungMedia;

/**
 * Plugin Name: Hatom/hentry remover (Fix errors in Google Webmaster Tools)
 * Description: Remove .hentry-class with a post_class-filter to get rid of errors in Google Webmaster Tools.
 * Author: Rasmus Kjellberg
 * Author URI: https://www.rasmuskjellberg.se
 * Version: 1.2.1
 */

/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) 
	exit; 

// Remove .hentry-class
function remove_hentry_from_post_class_filter( $classes ) {
	$classes = str_replace('hentry', '', $classes);
	return $classes;
}

add_filter( 'post_class', '\YoungMedia\remove_hentry_from_post_class_filter' );
