<?php
/**
 * @package Momentsss
 * @version 1.7.2
 */
/*
Plugin Name: Moments Plugin
Plugin URI: 
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Wizzy Create
Version: 1.7.2
Author URI: http://ma.tt/
*/



function admin_greeting_notice() {
    $current_user = wp_get_current_user();
    $greeting = 'Hello, ' . $current_user->display_name . '! Welcome to the WordPress Admin area.';
    echo '<div class="notice notice-info is-dismissible"><p>' . $greeting . '</p></div>';
}
add_action('admin_notices', 'admin_greeting_notice');
