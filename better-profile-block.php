<?php
/**
 *
 * Adds a profile block to the WordPress 5 Gutenberg block editor.
 *
 * @link https://github.com/andrewkmacy/better-profile-block
 * @since 1.0.0
 * @package BPB
 *
 * @wordpress-plugin
 * Plugin Name: Better Profile Block
 * Plugin URI: https://github.com/andrewkmacy/better-profile-block
 * Description: Better Profile Block is a Gutenberg block designed to add custom author bios to your posts and pages.
 * Author: Drew Macy, based on Organic Profile Block by Organic Themes - https://github.com/Invulu/organic-profile-block
 * Author URI: https://github.com/andrewkmacy/better-profile-block
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'BPB_VERSION' ) ) {
	define( 'BPB_VERSION', '1.4.1' );
}

if ( ! defined( 'BPB_NAME' ) ) {
	define( 'BPB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'BPB_DIR' ) ) {
	define( 'BPB_DIR', WP_PLUGIN_DIR . '/' . BPB_NAME );
}

if ( ! defined( 'BPB_URL' ) ) {
	define( 'BPB_URL', WP_PLUGIN_URL . '/' . BPB_NAME );
}

/**
 * BLOCK: Profile Block.
 */
require_once BPB_DIR . '/block/profile/index.php';