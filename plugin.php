<?php
/**
 * Plugin Name
 *
 * @package     Jpl_Plugin
 * @author      Your Name
 * @copyright   2016 Your Name or Company Name
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: ShortCodes
 * Plugin URI:  https://example.com/plugin-name
 * Description: Just Another WordPress Plugin
 * Version:     1.0.1
 * Author:      JPL Plugins
 * Author URI:  https://example.com
 * Text Domain: JPL Plugin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// namespace JPl_Plugin;

// ********************** SHORTCODES ********************** //

include( plugin_dir_path( __FILE__ ) . 'modules/shortcodes.php');
include( plugin_dir_path( __FILE__ ) . 'functions.php');

