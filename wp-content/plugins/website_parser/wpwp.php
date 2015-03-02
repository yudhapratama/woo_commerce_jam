<?php
/**
 * @package website_parser
 * @version 0.1
 */
/*
Plugin Name: Image Scrapper
Plugin URI: http://wordpress.org/plugins/website_parser/
Description: This plugin used for scrap images from URL
Author: Kartika Yudha Pratama based on Morshed Alam <morshed201@gmail.com>
Version: 0.1
Author URI: http://bocahnewbie.blogspot.com/
*/

// Make sure we don't expose any info if called directly. Silence is golden.

if (!function_exists('add_action'))
	exit;

define('WPP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WPP_PLUGIN_FILE', plugin_basename(__FILE__));
define('WPP_VERSION', '0.1');

require_once( WPP_PLUGIN_DIR . 'WP_Web_Parser.php' );

add_action('init', array('WP_Web_Parser', 'init'));

register_activation_hook(__FILE__, array('WP_Web_Parser', 'plugin_activate'));
register_deactivation_hook(__FILE__, array('WP_Web_Parser', 'plugin_deactivate'));