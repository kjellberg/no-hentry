<?php
namespace YoungMedia;

/**
 * Plugin Name: Hatom/hentry remover (Fix errors in Google Webmaster Tools)
 * Description: Remove .hentry-class with a post_class-filter to get rid of errors in Google Webmaster Tools.
 * Author: Rasmus Kjellberg
 * Author URI: https://www.rasmuskjellberg.se
 * Version: 1.3
 */

/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) 
	exit; 

// Remove .hentry-class from static html
function remove_hentry_from_post_class_filter( $classes ) {
	$classes = str_replace('hentry', 'placeholder-for-hentry', $classes);
	return $classes;
}

// Add hentry class again with jQuery.
// This will prevent Google from indexing it.
function footer_script_that_adds_hentry_again() {
?>
<script type="text/javascript">
jQuery(document).on('ready', function() {
	/**
	 * No hentry plugin
	 * Removes hentry tag from Google indexing, but adds it again to
	 * prevent display errors in theme using the class for CSS-styling.
	*/
	jQuery('.placeholder-for-hentry').addClass('hentry');
	jQuery('.placeholder-for-hentry').removeClass('placeholder-for-hentry');
});
</script>
<?php
}

add_filter( 'post_class', '\YoungMedia\remove_hentry_from_post_class_filter' );
add_filter( 'wp_footer', '\YoungMedia\footer_script_that_adds_hentry_again' );
