<?php
/**
 * Plugin Name: WP HTML Author Bio
 * Plugin URI: https://github.com/ahmadawais/WP-HTML-Author-Bio
 * Description: Allows you to use HTML and rel= in author's bio, this helps you to get indexed as an author in Google Seearch.
 * Author: WPCouple(Ahmad Awais & Maedah Batool)
 * Author URI: https://WPCouple.com/
 * Version: 1.1.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package WPHAB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Remove the HTML filter from user description.
remove_filter( 'pre_user_description', 'wp_filter_kses' );
