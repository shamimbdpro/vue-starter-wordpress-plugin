<?php 

/**
 * Plugin Name:       Vue Starter WordPress Plugin
 * Plugin URI:        https://codepopular.com
 * Description:       This is Basic skeleton of Vue Plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shamim
 * Author URI:        https://codepopular.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       text-domain
 * Domain Path:       /languages
 */


define('VSWP_PLUGIN_FILE', __FILE__);
define('VSWP_PLUGIN_BASENAME', plugin_basename(__FILE__));
define('VSWP_PLUGIN_PATH', trailingslashit(plugin_dir_path(__FILE__)));
define('VSWP_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)));
define('VSWP_PLUGIN_VERSION', '1.0.0');

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/

/**
 * Load all plugin files.
 */
include_once(VSWP_PLUGIN_PATH . '/include/VSWP_Loader.php');


if ( function_exists( 'vue_starter_wp_plugin' ) ) {
    vue_starter_wp_plugin();
}

?>