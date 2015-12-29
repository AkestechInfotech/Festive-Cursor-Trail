
<?php
/**
 * @package festive-cursor-trail
 */
/*
Plugin Name: Festive Cursor Trail
Plugin URI: http://akestech.com/
Description: This plugin is developed specially for Blogger or non Blogger Person. It gives feature of changing mouse cursor instently on click. No need to create script for cursor.Know the developer of Plugin <a href="http://akestech.com/">Akestech Infotech</a>
Version: 1.0.0
Author: Akestech Infotech
Author URI: http://www.akestech.com/
Text Domain: akestech
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


/***********GLOBAL************/
//retrieve our plugin setting from option table
$wpap_setting = get_option('wpap_settings');

/***********GLOBAL ENDS************/


/***********INCLUDE PAGES************/

include('includes/display_functions.php');
include('includes/settings.php');
include('includes/scripts.php');

/***********INCLUDE PAGES END********/

//add_action( 'the_title','festive_cursor_trail');
//add_action( 'the_content','festive_cursor_trail');

add_action('the_content','festive_cursor_trail');


if($wpap_setting['ligh_bulb'] == true)
{
	add_action('wp_head','wpap_load_lightbulb');	
}

if($wpap_setting['cursor'] == true)
{
	add_action('wp_head','wpap_load_cursor');	
}
