<?php
/*
 * Plugin Name: Awesome Slider Block
 * Plugin URI: https://wordpress.org/plugins/awesome-slider-block
 * Description: A Gutenberg Awesome Slider Block Plugin.
 * Author: WPDevSquad
 * Author URI: https://wpdevsquad.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
