<?php
/*
Plugin Name: Hide Generator Meta Tag
Plugin URI: https://zafrira.net/en/tools/wordpress-plugins/hide-generator-meta-tag/
Description: Hide the meta tag in your header where it says that your page is generated using WordPress. For some this is improving security.
Version: 1.0.1
Author: Zafrira
Author URI: https://zafrira.net
*/

if(!is_admin()){
	remove_action('wp_head', 'wp_generator');
}